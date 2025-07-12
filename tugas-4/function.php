<?php 

$hargaSatuan = 15000;
$jumlahBeli = 2;


function belanja ($hargaSatuan, $jumlahBeli) {
    $total = $hargaSatuan * $jumlahBeli;
    return $total;
} 

echo "Harga yang harus kamu bayar adalah: Rp. " . belanja($hargaSatuan, $jumlahBeli) . "<br>";



?>