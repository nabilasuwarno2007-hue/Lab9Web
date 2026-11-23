
<?php
$deskripsi = ringkasTeks(
    "Aplikasi ini digunakan untuk mengelola data barang melalui fitur CRUD.",
    45
);

$hargaAwal = 200000;
$hargaDiskon = hitungDiskon($hargaAwal, 10);
?>

<section class="dashboard">
    <div class="welcome">
        <h2>Selamat Datang! 👋</h2>
        <p>Kelola data barang dengan lebih mudah melalui aplikasi PHP Modular.</p>
    </div>

    <div class="dashboard-cards">
        <div class="dashboard-card">
            <h3>Aplikasi</h3>
            <p>Pengelolaan Data Barang</p>
        </div>

        <div class="dashboard-card">
            <h3>Fitur Utama</h3>
            <p>CRUD Data Barang</p>
        </div>

        <div class="dashboard-card">
            <h3>Harga Contoh</h3>
            <p><?= formatRupiah($hargaAwal); ?></p>
        </div>
    </div>

    <div class="dashboard-info">
        <h3>Informasi Aplikasi</h3>
        <p><?= $deskripsi; ?></p>
        <p>Harga setelah diskon 10%:
            <strong><?= formatRupiah($hargaDiskon); ?></strong>
        </p>

        <a class="btn-dashboard"
           href="index.php?page=barang/list">
            Lihat Data Barang →
        </a>
    </div>
</section>
