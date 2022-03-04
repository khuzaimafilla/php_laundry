<?php
    if($_POST){
        $id_member=$_POST["id_member"];
        $nama=$_POST["nama"];
        $alamat=$_POST["alamat"];
        $gender=$_POST["gender"];
        $tlp=$_POST["tlp"];

        if(empty($nama)){
            echo "<script>alert{'nama tidak boleh kosong');location.href='tambah_member.php';</script>";
        } elseif(empty($gender)){
            echo "<script>alert{'gender tidak boleh kosong');location.href='tambah_member.php';</script>";
        } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi, "update member set nama='".$nama."', alamat='".$alamat."', gender='".$gender."', tlp='".$tlp."' where id_member = '".$id_member."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_member.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update');location.href='ubah_member.php?id=".$id_member."';</script>";
                    }
                } else {
                    $update=mysqli_query($koneksi, "update member set nama='".$nama."',alamat='".$alamat."',gender='".$gender."',tlp='".$tlp."' where id = '".$id_member."' ") or
            die(mysqli_error($koneksi));
                if($update){
                        echo "<script>alert('Sukses update');location.href='tampil_member.php';</script>";
                    } else{
                        echo "<script>alert('Gagal update');location.href='ubah_member.php?id=".$id."';</script>";
                }
        }
}
}
?>