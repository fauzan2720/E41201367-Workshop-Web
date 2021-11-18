<?php 

require 'functions.php';
session_start();

//mematikan session
if (session_destroy()) {
    header('Location: home.php');
}

// untuk mengecek apakah session terbaca
echo $_SESSION['no_telp'] ;

?>