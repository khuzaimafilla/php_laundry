<?php
    if($_GET['id']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"delete from paket where id_paket ='".$_GET['id']."'");
    if($query_hapus){
        echo "<script>alert('Sukses hapus');location.href='tampil_paket.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus');location.href='tampil_paket.php';</script>";
        }
    } 
?>