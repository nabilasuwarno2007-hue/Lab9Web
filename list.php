<h2>Data Barang</h2>

<a href="index.php?page=barang/add">Tambah Barang</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID Barang</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM data_barang");

    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?= htmlspecialchars($data['id_barang']); ?></td>
<td>
    <?php
    if ($data['id_barang'] == 1) {
        $gambar = 'samsung.jpg';
    } elseif ($data['id_barang'] == 8) {
        $gambar = 'xiaomi.jpg';
    } elseif ($data['id_barang'] == 3) {
        $gambar = 'oppo.jpg';
    } else {
        $gambar = '';
    }
    ?>

    <?php if ($gambar !== '') { ?>
        <img src="assets/images/<?= htmlspecialchars($gambar); ?>" alt="Gambar Barang">
    <?php } else { ?>
        Tidak ada gambar
    <?php } ?>
</td>
<td><?= htmlspecialchars($data['nama']); ?></td>
            <td><?= htmlspecialchars($data['kategori']); ?></td>
            <td><?= formatRupiah($data['harga_jual']); ?></td>
            <td><?= formatRupiah($data['harga_beli']); ?></td>
            <td><?= htmlspecialchars($data['stok']); ?></td>
            <td>
                <a href="index.php?page=barang/edit&id=<?= $data['id_barang']; ?>">Ubah</a> |
                <a href="index.php?page=barang/delete&id=<?= $data['id_barang']; ?>">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>