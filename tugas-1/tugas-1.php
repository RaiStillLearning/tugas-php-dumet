<?php

echo "Pilih menu makanan:<br/>";
echo "1. Nasi Goreng: Rp 15.000 <br/>";
echo "2. pecel lele: Rp 13.000<br/>";
echo "3. Ayam bakar: Rp 18.000<br/>";
echo "4. sate padang: Rp 15.000<br/>";


$pilihan = readline("Masukkan pilihan (1-4): ");
switch ($pilihan) {
    case 1:
        echo "Anda memilih Nasi Goreng dengan harga Rp 15.000";
        break;
    case 2:
        echo "Anda memilih Pecel Lele dengan harga Rp 13.000";
        break;
    case 3:
        echo "Anda memilih Ayam Bakar dengan harga Rp 18.000";
        break;
    case 4:
        echo "Anda memilih Sate Padang dengan harga Rp 15.000";
        break;
    default:
        echo "Pilihan tidak ada!.";
}


?>