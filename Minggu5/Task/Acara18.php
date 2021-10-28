
<?php

// operator 1
echo "Operator 1: <br>";
$tugas1 = 90;
$tugas2 = 80;
$jumlah = $tugas1 + $tugas2;
$rerata = $jumlah / 2;
echo "Nilai Tugas I: " . $tugas1 . "<br>";
echo "Nilai Tugas II: " . $tugas2 . "<br>";
echo "Jumlah: " . $jumlah . "<br>";
echo "Rata-rata: " . $rerata . "<br>";
echo "Nilai Gabungan Tugas I dan Tugas II: " . $tugas1 . $tugas2 . "<br>";
echo "----------------------------------------------------------<br>";

// operator 2
echo "Operator 2: <br>";
$x = 90;
$y = 80;
echo "Nilai x: " . $x . "<br>";
echo "Nilai y: " . $y . "<br>";
echo "Jumlah: " . ($x + $y) . "<br>";
echo "Selisih: " . ($x - $y) . "<br>";
echo "Perkalian: " . ($x * $y) . "<br>";
echo "Pembagian: " . ($x / $y) . "<br>";
echo "Modulo: " . ($x % $y) . "<br>";
$a = "Hello";
$b = $a . " world!";
echo $b . "<br>";
echo $a . " -- " . $b . " (ini string operator)" . "<br>";
echo "Nilai Gabungan x dan y: " . $x . $y;

?>