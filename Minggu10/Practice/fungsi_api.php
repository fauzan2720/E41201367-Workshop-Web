<?php 

include 'koneksi.php';

function register_user($name, $password, $email) {
    global $link;

    $nama = escape($name);
    $password = escape($password);

    $query = "INSERT INTO user_detail(user_email, user_password, user_fullname, levell) VALUES ('$nama', '$password', '$email', '2')";

    $user_new = mysqli_query($koneksi, $query);
    if ($user_new) {
        $usr = "SELECT * FROM user_detail WHERE user_fullname = '$nama' OR user_email = '$email'";
        $result = mysqli_query($koneksi, $usr);
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return NULL;
    }
}

function escape($data) {
    global $link;
    return mysqli_real_escape_string($string, $data);
}

function cek_nama($email) {
    global $link;
    $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
    if ($result = mysqli_query($koneksi, $query)) {
        return mysqli_num_rows($result);
    }
}

function cek_data_user($name, $pass) {
    global $link;

    $nama = escape($name);
    $password = escape($password);

    $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    $unique_id = $data('unique_id');
}

?>