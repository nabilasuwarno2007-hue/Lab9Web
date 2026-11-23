<?php
global $conn;

$id = $_GET['id'] ?? '';

if ($id === '' || !ctype_digit((string) $id)) {
    echo "ID barang tidak valid.";
    return;
}

$id = (int) $id;

$stmt = mysqli_prepare($conn, "SELECT * FROM data_barang WHERE id_barang=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data barang tidak ditemukan.";
    return;
}

if (isset($_POST['hapus'])) {
    $stmt = mysqli_prepare($conn, "DELETE FROM data_barang WHERE id_barang=?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        setFlashMessage('Data barang berhasil dihapus!', 'success');
        echo "<script>window.location='index.php?page=barang/list';</script>";
        exit;
    } else {
        setFlashMessage('Gagal menghapus data barang!', 'error');
        echo "<script>window.location='index.php?page=barang/list';</script>";
        exit;
    }
}
?>

<section>
    <h2>Hapus Barang</h2>

    <p>Apakah Anda yakin ingin menghapus barang berikut?</p>

    <p>
        Nama Barang: <strong><?= htmlspecialchars($data['nama']); ?></strong>
    </p>

    <form method="post" action="">
        <button type="submit" name="hapus">Ya, Hapus</button>
        <a href="index.php?page=barang/list">Batal</a>
    </form>
</section>
