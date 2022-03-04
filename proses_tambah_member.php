<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['gender'];
        $tlp=$_POST['tlp'];

            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into member (nama, alamat, gender, tlp)
            value
            ('".$nama."','".$alamat."','".$gender."','".$tlp."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses Menambahkan');location.href='tambah_member.php';</script>";
            }

            else {
                echo "<script>alert('Gagal Menambahkan');location.href='tambah_member.php';</script>";
            }
        }
    
?>