<?php
    if($_POST){
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];

            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into paket (jenis, harga)
            value
            ('".$jenis."','".$harga."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tambah_paket.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_paket.php';</script>";
            }
        }
    
?>