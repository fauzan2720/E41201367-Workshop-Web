
<?php

// 1. untuk beralih ke halaman lain yang diklik pada navbar
$nav = "beranda";
switch ($nav) {
    case 'beranda':
        echo "Selamat datang di halaman beranda! <br>";
        break;

    case 'kursus':
        echo "Selamat datang di halaman kursus! <br>";
        break;

    case 'kontak':
        echo "Selamat datang di halaman kontak! <br>";
        break;

    default:
        echo "Halaman belum berfungsi! <br>";
        break;
}

// 2. harga minuman
$jenis = "kopi";
switch ($jenis) {
    case 'teh':
        echo "Harga $jenis = Rp5000. <br>";
        break;

    case 'kopi':
        echo "Harga $jenis = Rp8000. <br>";
        break;

    default:
        echo "Maaf, menu yang dipesan tidak ada! <br>";
        break;
}

// 3. hak akses login kepada admin
$username = "admin";
if ($username == "admin") {
    echo "Selamat datang, Admin! <br>";
} else {
    echo "Selamat datang, $username! <br>";
}

// 4. syarat nilai UAS naik kelas
$nilai = 80;
if ($nilai < 80) {
    echo "Maaf, Anda tidak naik kelas dengan nilai $nilai. <br>";
} else {
    echo "Selamat, Anda naik kelas dengan nilai $nilai! <br>";
}

// 5. minimal usia melihat konten
$usia = 17;
if ($usia <= 17) {
    echo "Maaf, konten ini tidak diperuntukkan untuk usia $usia tahun. <br>";
} else {
    echo "Selamat menonton! <br>";
}

// 6. pembayaran
$saldo = 1000;
if ($saldo == 0) {
    echo "Maaf, saldo anda habis! <br>";
} else if ($saldo < 2000) {
    echo "Maaf, saldo anda tidak mencukupi, silahkan top up terlebih dahulu! <br>";
} else {
    echo "Pembayaran senilai 2000 berhasil! <br>";
}

?>