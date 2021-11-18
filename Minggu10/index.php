<?php

require 'functions.php';

session_start();

if( isset($_POST['login']) ) {
    $no_telp = $_POST['no_telp'];
    $pwd = $_POST['pwd'];

    $_SESSION['no_telp'] = $_POST['no_telp'];

    if(!empty(trim($no_telp)) && !empty(trim($pwd))) {

        //select data berdasarkan nama dari database
        $query = "SELECT * FROM akun WHERE no_telp = '$no_telp' ";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $userVal = $row['no_telp'];
            $pwdVal = $row[ 'pwd'];
            $nama = $row['nama_lengkap'];
            $email = $row['email'];
        }
        if ($num != 0) {
            if($userVal == $no_telp && $pwdVal == $pwd) {
                header('Location: home.php');
            } else {
                $error = 'user atau password salah!!';
                header('Location: index.php');
            }
        } else {
            $error = 'user tidak ditemukan';
            header('Location: index.php');
        }
    } else {
        $error = 'user tidak ditemukan!!';
        echo $error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- library fontawesome -->
    <script src="https://kit.fontawesome.com/b8a4c1841d.js" crossorigin="anonymous"></script>

    <style>
        .fr {
            float: right;
        }

        .td-none {
            text-decoration: none;
        }

        .text-hover:hover {
            color: blue !important;
            text-decoration: underline;
        }

        .box {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 27%;
        }

        .letter-spacing {
            letter-spacing: 1px;
        }

        .small {
            font-size: 14px !important;
        }

        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-light">
    <form action="" method="post">
        <ul>
            <li>
                <label for="no_telp">No. Telepon : </label>
                <input type="text" name="no_telp" id="no_telp">
            </li>
            <li>
                <label for="pwd">Password : </label>
                <input type="password" name="pwd" id="pwd">
            </li>
            <li>
                <button type="submit" name="login">Sign In</button>
            </li>
        </ul>
    </form>
</body>

</html>