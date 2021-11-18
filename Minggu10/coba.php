<?php

require 'functions.php';

session_start();

if( isset($_POST['login']) ) {
    $no_telp = $_POST['no_telp'];
    $pwd = $_POST['pwd'];

    /*
    $no_telpCheck = mysqli_real_escape_string($koneksi, $no_telp);
    $pwdCheck = mysqli_real_escape_string($koneksi, $pwd);
    */

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
            if($userVal==$no_telp && $pwdVal==$pwd) {
                header('Location: home.php');
            } else {
                $error = 'user atau password salah!!';
                header('Location: home.php');
            }
        } else {
            $error = 'user tidak ditemukan';
            header('Location: home.php');
        }
    } else {
        $error = 'user tidak ditemukan!!';
        echo $error;
    }
}

// if (isset($_POST["login"])) {
//     $no_telp = $_POST["no_telp"];
//     $pwd = $_POST["pwd"];

//     $result = mysqli_query($conn, "SELECT * FROM akun WHERE no_telp = '$no_telp'");

//     if (mysqli_num_rows($result) === 1) {
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($pwd, $row["pwd"])) {
//             echo "berhasil";
//             // header("location:home.php");
//             // exit;
//         }
//     }

    // $error = true;

    // if (isset($_SESSION['no'])) {
    //     header("Location: home.php");
    // }

    // if (isset($_POST['submit'])) {
    //     $no_telp = $_POST['no_telp'];
    //     $pwd = md5($_POST['pwd']);

    //     $sql = "SELECT * FROM akun WHERE no_telp = '$no_telp' AND pwd='$pwd'";
    //     $result = mysqli_query($conn, $sql);
    //     if ($result->num_rows > 0) {
    //         $row = mysqli_fetch_assoc($result);
    //         // $_SESSION['no'] = $row['no'];
    //         header("Location: home.php");
    //     } else {
    //         echo "<script>alert('Nomor Telepon atau password Anda salah. Silahkan coba lagi!')</script>";
    //     }
    // }


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



    <!-- <div class="box">
        <p class="text-center mb-4 letter-spacing"><a href="#" class="text-dark fs-2 td-none text-hover">Halaman Login</a></p>

        <div class="card shadow py-1 px-2">
            <div class="card-body">
                <p class="text-center letter-spacing mb-4 small">Sign in to start your session</p>


                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control letter-spacing" placeholder="Nomor Telepon" name="no_telp" id="phone">
                        <label class="input-group-text" for="phone"><i class="fas fa-envelope"></i></label>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control letter-spacing" placeholder="Password" name="pwd" id="password">
                        <label class="input-group-text" for="password"><i class="fas fa-lock"></i></label>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <div class="col">
                            <button type="submit" name="login" class="btn btn-primary fr py-2 small">Sign In</button>
                        </div>
                    </div>
                </form>

                <a href="#" class="td-none text-hover small">Forgot Your Password?</a><br>
                <a href="daftar.php" class="td-none text-hover small">Register a new membership</a>
            </div>
        </div>
    </div> -->
</body>

</html>