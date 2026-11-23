
<?php
global $conn;

$id = $_GET['id'] ?? '';

if ($id === '' || !ctype_digit((string) $id)) {
    echo "ID barang tidak valid.";
    return;
}

$id = (int) $id;

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $stmt = mysqli_prepare($conn, "UPDATE data_barang SET nama=?, kategori=?, harga_jual=?, harga_beli=?, stok=? WHERE id_barang=?");
    mysqli_stmt_bind_param($stmt, "ssiiii", $nama, $kategori, $harga_jual, $harga_beli, $stok, $id);

    if (mysqli_stmt_execute($stmt)) {
        setFlashMessage('Data barang berhasil diubah!', 'success');
        echo "<script>window.location='index.php?page=barang/list';</script>";
        exit;
    } else {
        setFlashMessage('Gagal mengubah data barang!', 'error');
        echo "<script>window.location='index.php?page=barang/edit&id=$id';</script>";
        exit;
    }
}

$stmt = mysqli_prepare($conn, "SELECT * FROM data_barang WHERE id_barang=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data barang tidak ditemukan.";
    return;
}
?>

<section>
    <h2>Edit Barang</h2>

    <form method="post" action="">
        <label>Nama Barang</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" value="<?= htmlspecialchars($data['kategori']); ?>" required><br><br>

        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual" value="<?= htmlspecialchars($data['harga_jual']); ?>" required><br><br>

        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli" value="<?= htmlspecialchars($data['harga_beli']); ?>" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="<?= htmlspecialchars($data['stok']); ?>" required><br><br>

        <button type="submit" name="update">Update</button>
    </form>
</section>
