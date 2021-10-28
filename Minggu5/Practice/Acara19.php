
<?php

$nama = "Fauzan";

// percabangan if else
if ($nama = "Fauzan") {
    echo "Selamat datang, " . $nama . "<br>";
} else {
    echo "Selamat datang di POLIJE <br>";
}

// percabangan switch case
switch ($nama) {
    case 'Fauzan':
        echo "Selamat datang, " . $nama . "<br>";
        break;

    case 'Abdillah':
        echo "Selamat datang, " . $nama . "<br>";
        break;

    default:
        echo "Selamat datang di POLIJE <br>";
        break;
}

// kontrol (break)
for ($i = 0; $i < 1000; $i++) {
    if ($i = 20) {
        echo $i . "<br>";
        break;
    }
    echo $i;
}

?>