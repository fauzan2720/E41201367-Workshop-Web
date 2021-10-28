
<?php

$jumlah = 0;
$banyak = 0;
for ($i = 100; $i <= 1000; $i++) {
    echo "$i ";
    $jumlah += $i;
    $banyak++;
}
echo "<br><br>Jumlah nilai: $jumlah";
echo "<br>Banyak data: $banyak";

?>