<?php
$email = "admin@aplikasibarang.com";
$emailValid = validasiEmail($email);
?>

<section>
    <h2>Halaman Kontak</h2>
    <p>Halaman ini berisi informasi kontak pengelola Aplikasi Pengelolaan Data Barang.</p>

    <p>Email: <?= htmlspecialchars($email); ?></p>

    <p>Status Email:
        <?php if ($emailValid) { ?>
            Email valid
        <?php } else { ?>
            Email tidak valid
        <?php } ?>
    </p>

    <p>Alamat: Universitas Pelita Bangsa</p>
</section>