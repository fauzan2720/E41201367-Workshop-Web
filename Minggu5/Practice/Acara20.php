
<?php

// 1. perulangan for
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        echo $i . $j . " ";
    }
}
echo "<br>";

// 2. perulangan while
$a = 1;
while ($a <= 3) {
    echo $a . " ";
    $a++;
}
echo "<br>";

// 3. perulangan do while
$b = 0;
do {
    echo $b . " ";
    $b++;
} while ($b <= 10);
echo "<br>";

// 4. perulangan foreach
$nama = array("Fau", "zan ", "Ab", "dillah");

foreach ($nama as $val) {
    echo $val;
}
echo "<br>";

foreach ($nama as $index => $isi) {
    echo "Urutan index ke-$index adalah $isi <br>";
}

?>