
<?php

$mat_a = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];
$mat_b = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// membuat panjang array
$baris_a = count($mat_a);
$kolom_a = count($mat_a[0]);
$baris_b = count($mat_b);
$kolom_b = count($mat_b[0]);

// memanggil matriks A
echo "Diketahui matriks A = <br>";
for ($i = 0; $i < $baris_a; $i++) {
    echo "[ ";
    for ($j = 0; $j < $kolom_a; $j++) {
        echo $mat_a[$i][$j] . " ";
    }
    echo "] <br>";
}
echo "<br>";

// memanggil matriks B
echo "Diketahui matriks B = <br>";
for ($i = 0; $i < $baris_b; $i++) {
    echo "[ ";
    for ($j = 0; $j < $kolom_b; $j++) {
        echo $mat_b[$i][$j] . " ";
    }
    echo "] <br>";
}
echo "<hr>";

// menghitung hasil jumlah matriks a dengan b
echo "Hasil dari Matriks A+B = <br>";
for ($i = 0; $i < $baris_a; $i++) { // proses penjumlahan matriks
    echo "[ ";
    for ($j = 0; $j < $kolom_a; $j++) {
        echo "(" . $mat_a[$i][$j] . "+" . $mat_b[$i][$j] . ") ";
    }
    echo "] <br>";
}

echo "<br>Jadi hasilnya = <br>";
for ($i = 0; $i < $baris_a; $i++) { // hasil dari penjumlahan matriks
    echo "[ ";
    for ($j = 0; $j < $kolom_a; $j++) {
        $jumlah_mat = $mat_a[$i][$j] + $mat_b[$i][$j];
        echo $jumlah_mat . " ";
    }
    echo " ] <br>";
}

?>