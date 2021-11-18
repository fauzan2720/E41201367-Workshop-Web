<?php

require 'functions.php';

$no = $_GET["no"];

if(delete($no) > 0) {
    echo "
        <script>    
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>    
            alert('Data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
}
