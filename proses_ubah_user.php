<?php
    if($_POST){
        $id_user=$_POST["id_user"];
        $nama=$_POST["nama"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $role=$_POST["role"];

        if(empty($nama)){
            echo "<script>alert{'nama tidak boleh kosong');location.href='tambah_user.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert{'username tidak boleh kosong');location.href='tambah_user.php';</script>";
        } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi, "update user set nama='".$nama."', username='".$username."' where id_user = '".$id_user."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_user.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update');location.href='ubah_user.php?id=".$id_user."';</script>";
                    }
                } else {
                    $update=mysqli_query($koneksi, "update user set nama='".$nama."',username='".$username."',password='".md5($password)."',role='".$role."' where id = '".$id_user."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_user.php';</script>";
                    } else{
                        echo "<script>alert('Gagal update');location.href='ubah_user.php?id=".$id."';</script>";
                }
        }
}
}
?>