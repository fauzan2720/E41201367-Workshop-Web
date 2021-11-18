<?php 

include 'koneksi.php';
include 'fungsi_api.php';

$response = array("error" => FALSE);

if (isset($_POST['txt_nama']) && isset($_POST['txt_pass']) && isset($_POST['txt_email'])) {
    $name = $_POST['txt_nama'];
    $password = $_POST['txt_pass'];
    $email = $_POST['txt_email'];

    if (cek_nama($email) == 0) {
        $user = register_user($name, $password, $email);
        if ($user) {
            // simpan user berhasil
            $response['error'] = FALSE;
            $response['error']['name'] = $user['user_fullname'];
            $response['error']['key'] = $user['unique_id'];
            var_dump($user);
            //echo json_encode($response);
        } else {
            // gagal menyimpan
            $response['error'] = TRUE;
            $response['error_msg'] = "Terjadi kesalahan saat melakukan registrasi";
            echo json_encode($response);
        }
    } else {
        // gagal menyimpan
        $response['error'] = TRUE;
        $response['error_msg'] = "User telah terdaftar!";
        echo json_encode($response);
    }
}

?>