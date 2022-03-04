<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah Member</title>
</head>
<style>
      body{
        background-image: url("https://image.freepik.com/free-photo/foam-bubbles-from-soap-shampoo-washing-white-background_52456-116.jpg");
        background-repeat:no-repeat;
        background-size:cover;
      }
    </style>
<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $qry_get_member=mysqli_query($koneksi,"select * from member where id_member = '".$_GET['id']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <div class="container">
        <h3>Ubah member</h3>
        <form action="proses_ubah_member.php" method="post">
            <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">
            Nama: <br>
            <input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">
            Alamat : <br>
            <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">
            Gender : <br>
            <select name="gender" class="form-control">
                <option></option>
                <option value="Laki">Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            Teplon : <br>
            <input type="text" name="tlp" value="<?=$dt_member['tlp']?>" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Ubah" class="btn btn-dark">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>