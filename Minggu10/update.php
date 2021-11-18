<?php

require 'functions.php';

$no = $_GET["no"];

// query data berdasarkan no pada database
$data = query("SELECT * FROM akun WHERE no = $no")[0];

if (isset($_POST["submit"])) {
    // cek data berhasil
    if (update($_POST) > 0) {
        echo "
            <script>    
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>    
                alert('Data gagal diubah!');
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
</head>

<body>
    <h1>Ubah Data Barang</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="no">No</label>
                <input type="text" name="no" id="no" required readonly value="<?= $data["no"] ?>">
            </li>
            <li>
                <label for="merk">Nama Merek</label>
                <input type="text" name="nama_merek" id="merk" required autofocus value="<?= $data["nama_merek"] ?>">
            </li>
            <li>
                <label>Warna</label>
                <select name="warna" required value="<?= $data["warna"] ?>">
                    <option value="Hitam">Hitam</option>
                    <option value="Biru">Biru</option>
                </select>
            </li>
            <li>
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" required value="<?= $data["jumlah"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>