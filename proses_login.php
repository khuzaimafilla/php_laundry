<?php
    if ($_POST) {
        $username_a = $_POST['username'];
        $password_a = $_POST['password'];

        include "koneksi.php";
        $query_login=mysqli_query($koneksi,"SELECT * FROM user where
        username = '".$username_a."' and password = '".md5($password_a)."'");

        if (mysqli_num_rows($query_login)>0) {
            $data_login = mysqli_fetch_array($query_login);
            session_start();
            $_SESSION['id_user']=$data_login['id_user'];
            $_SESSION['nama']=$data_login['nama'];
            $_SESSION['status_login']=true;
            echo "<script>alert('Login Berhasil');location.href='home.php';</script>";
        }
        else{
            echo "<script>alert('Login Gagal');location.href='index.php';</script>";
        }
    }
?>