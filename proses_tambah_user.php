<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username_a=$_POST['username'];
        $password_a=$_POST['password'];
        $role=$_POST['role'];

            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into user (nama, username, password, role)
            value
            ('".$nama."','".$username_a."','".md5($password_a)."','".$role."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tambah_user.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_user.php';</script>";
            }
        }
    
?>