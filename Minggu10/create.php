<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    // cek data berhasil
    if (create($_POST) > 0) {
        echo "
            <script>    
                alert('Data berhasil ditambahkan!');
                document.location.href = 'home.php';
            </script>
        ";
    } else {
        echo "
            <script>    
                alert('Data gagal ditambahkan!');
                document.location.href = 'daftar.php';
            </script>
        ";
    }
}
