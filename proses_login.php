<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from akun where username='$username' and password='$password'";
    $query = mysqli_query($koneksi, $sql);

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        echo "<script> document.location = 'index.php'; </script>";
    }else{
        echo "<script>alert('Maaf Username Atau Password Salah'); document.location = 'login.php'; </script>";
    }

?>