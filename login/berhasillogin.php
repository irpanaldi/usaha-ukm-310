<?php
// Cek apakah form login telah disubmit
if(isset($_POST['login'])) {
    // Ambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password sesuai
    if($username == 'admin' && $password == 'password') {
        // Jika sesuai, redirect ke halaman utama
        header('Location: index.php');
        exit;
    } else {
        // Jika tidak sesuai, tampilkan pesan error
        $error = 'Username atau password salah';
    }
}
?>
