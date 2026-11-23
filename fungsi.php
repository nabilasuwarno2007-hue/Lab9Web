<?php
function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}

$harga = 15000;
$jumlah = 3;

$total = hitungTotal($harga, $jumlah);

echo "Harga satuan: Rp" . $harga . "<br>";
echo "Jumlah: " . $jumlah . "<br>";
echo "Total harga: Rp" . $total;
?>