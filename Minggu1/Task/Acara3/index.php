<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<html>

<head>
    <title>Acara 3</title>
</head>

<body>
    <a href="#tambah.php">Tambah Data User</a><br /><br />
    <table width="60%" border=1>
        <tr>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['name'] . "</td>";
            echo "<td>" . $user_data['mobile'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td><a href='#edit.php?id = $user_data[id]'>Edit</a> | <a href='#delete.php?id = $user_data[id]'>Delete</a></td></tr>";
        } ?>
    </table>

    <br><br>
    <a href="../Acara1.html">Acara 1</a> | <a href="../Acara2.html">Acara 2</a> | <a href="#">Acara 3</a>
</body>

</html>