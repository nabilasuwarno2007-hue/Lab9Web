<?php
global $conn;
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $query = mysqli_query($conn, "INSERT INTO data_barang 
        (nama, kategori, harga_jual, harga_beli, stok)
        VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok')");

if ($query) {
    setFlashMessage('Barang berhasil ditambahkan!', 'success');
    echo "<script>window.location='index.php?page=barang/list';</script>";
} else {
    setFlashMessage('Gagal menambahkan barang!', 'error');
    echo "<script>window.location='index.php?page=barang/add';</script>";
}
}
?>

<section>
    <h2>Tambah Barang</h2>

    <form method="post" action="">
        <label>Nama Barang</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual" required><br><br>

        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</section>
