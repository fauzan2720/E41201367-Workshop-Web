<?php

$HostName = "localhost";
$HostUser = "root";
$HostPass = "";
$DatabaseName = "user";

$koneksi = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

if (mysqli_connect_error()) {
    echo "GAGAL! : " . mysqli_connect_error();
}

?>