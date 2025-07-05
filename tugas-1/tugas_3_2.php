<?php
$nilai_tugas = 61;
$nilai_ujian = 61;

$nilai_rata = ($nilai_tugas + $nilai_ujian) / 2;

if ($nilai_rata > 60) {
    echo "Nilai rata-rata: $nilai_rata. Status: Lulus";
} else {
    echo "Nilai rata-rata: $nilai_rata. Status: Tidak Lulus";
}
?>
