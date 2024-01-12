<?php

// require_once 'arsip.php';
// $moora = new moora();

include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$level = mysqli_escape_string($conn, $_POST['level']);


//cek username 
$cek_user = mysqli_query($conn,"SELECT * FROM tb_user WHERE username ='$username' AND level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);

//uji username
if($user_valid) {
    if($password == $user_valid['password']) {
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];

        if($level == "Arsip") {
            header("location:halamanArsip.php");
        } elseif($level == "Perpustakaan") {
            header("location:halamanPerpus.php");
        } elseif($level == "Pembinaan") {
            header("location:halamanPembinaan.php");
        } elseif($level == "Sekertariat") {
            header("location:halamanSekertariat.php");
        }
    } else {
        echo "<script>alert('Maat, Login Gagal, Password anda tidak sesuai!');
        document.location='login.php'</script> ";
    }
} else {
    echo "<script>alert('Maat, Login Gagal, Username anda tidak terdaftar!');
    document.location='login.php'</script> ";
}
?>