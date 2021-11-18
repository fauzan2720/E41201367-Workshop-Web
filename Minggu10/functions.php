<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "crud_wsibw");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function create($data)
{
    global $conn;

    // ambil data dari tiap elemen
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $pwd = htmlspecialchars($data["pwd"]);
    $re_pwd = htmlspecialchars($data["re_pwd"]);


    if ($pwd != $re_pwd) {
        echo "
            <script>    
                alert('Konfirmasi password salah!');
            </script>
        ";
    } else {
        // query insert data
        $query = "INSERT INTO akun VALUES ('', '$nama_lengkap', '$email', '$no_telp', '$pwd')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

function update($data)
{
    global $conn;

    // ambil data dari tiap elemen
    $no = htmlspecialchars($data["no"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $pwd = htmlspecialchars($data["pwd"]);

    // query update data
    $query = "UPDATE akun SET no = '$no', nama_lengkap = '$nama_lengkap', email = '$email', no_telp = '$no_telp', pwd = '$pwd' WHERE no = $no";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($no)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM akun WHERE no = $no");
    return mysqli_affected_rows($conn);
}
