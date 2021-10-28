
<?php

function nilai($n1, $n2)
{
    $nilai = [$n1, $n2];
    $max = $n1;
    $min = $n1;

    echo "Nilai: ";
    for ($i = 0; $i < count($nilai); $i++) {
        echo $nilai[$i] . ' ';
        if ($nilai[$i] > $max) {
            $max = $nilai[$i];
        } else if ($nilai[$i] < $min) {
            $min = $nilai[$i];
        }
    }
    echo "<br>Nilai terbesar: " . $max;
    echo "<br>Nilai terkecil: " . $min . "<br><br>";
}

function showDate($format)
{
    echo date($format) . "<br><br>";
}

nilai(100, 150);
nilai(250, 200);
showDate("d-m-Y");
showDate("d-F-Y");

?>