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

?>