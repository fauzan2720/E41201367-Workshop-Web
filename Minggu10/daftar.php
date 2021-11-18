<?php require 'create.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daftar Akun</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- library fontawesome -->
    <script src="https://kit.fontawesome.com/b8a4c1841d.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

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
    </style>
</head>

<body class="bg-light">
    <div class="box">
        <p class="text-center mb-4 letter-spacing"><a href="#" class="text-dark fs-2 td-none text-hover">Halaman Register</a></p>

        <div class="card shadow py-1 px-2">
            <div class="card-body">
                <p class="text-center letter-spacing mb-4 small">Register a new membership</p>

                <form action="create.php" method="post">
                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control letter-spacing" placeholder="Name" required name="nama_lengkap">
                        <label class="input-group-text" for="name"><i class="fas fa-user"></i></label>
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control letter-spacing" placeholder="Email" required name="email">
                        <label class="input-group-text" for="email"><i class="fas fa-envelope"></i></label>
                    </div>

                    <div class="input-group mb-3">
                        <input id="phone" type="number" class="form-control letter-spacing" placeholder="Phone" required name="no_telp">
                        <label class="input-group-text" for="phone"><i class="fas fa-phone"></i></label>
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control letter-spacing" placeholder="Password" minlength="6" required name="pwd">
                        <label class="input-group-text" for="password"><i class="fas fa-lock"></i></label>
                    </div>

                    <div class="input-group mb-3">
                        <input id="re-password" type="password" class="form-control letter-spacing" placeholder="Retype Password" minlength="6" required name="re_pwd">
                        <label class="input-group-text" for="re-password"><i class="fas fa-lock"></i></label>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <input type="checkbox" id="agree">
                            <label for="agree">I agree to the <a href="#" class="td-none text-hover">therms</a></label>
                        </div>
                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-primary fr py-2 small">Register</button>
                        </div>
                    </div>
                </form>

                <a href="index.php" class="td-none text-hover small">I already have a membership</a><br>
            </div>
        </div>
    </div>
</body>

</html>