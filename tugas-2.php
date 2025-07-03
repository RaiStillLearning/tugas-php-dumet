<?php
echo "Masukkan nilai: ";
$nilai = trim(fgets(STDIN));  // Baca input dari user

if ($nilai >= 90) {
    echo "Nilai kamu A\n";
} elseif ($nilai >= 80) {
    echo "Nilai kamu B\n";
} elseif ($nilai >= 70) {
    echo "Nilai kamu C\n";
} elseif ($nilai >= 60) {
    echo "Nilai kamu D\n";
} else {
    echo "Nilai kamu E\n";
}
?>
