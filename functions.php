<?php

function konversiCelciusKeFahrenheit($c) {
    return ($c * 9 / 5) + 32;
}

function tentukanStatusNilai($nilai) {
    if ($nilai >= 60) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
function hitungDiskon($harga, $persen) {
    return $harga - ($harga * $persen / 100);
}

function validasiEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function ringkasTeks($teks, $panjang) {
    if (strlen($teks) > $panjang) {
        return substr($teks, 0, $panjang) . "...";
    }
    return $teks;
}
function setFlashMessage($pesan, $tipe = 'success') {
    $_SESSION['flash_message'] = [
        'pesan' => $pesan,
        'tipe' => $tipe
    ];
}

function showFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $flash = $_SESSION['flash_message'];

        echo '<div class="flash-message ' .
             htmlspecialchars($flash['tipe']) . '">';
        echo htmlspecialchars($flash['pesan']);
        echo '</div>';

        unset($_SESSION['flash_message']);
    }
}
?>