<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah Paket</title>
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
    $qry_get_paket=mysqli_query($koneksi,"select * from paket where id_paket = '".$_GET['id']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <div class="container">
        <h3>Ubah Paket</h3>
        <form action="proses_ubah_paket.php" method="post">
            <input type="hidden" name="id_paket" value="<?=$dt_paket['id_paket']?>">
            Jenis: <br>
            <input type="text" name="jenis" class="form-control">
            Harga : <br>
            <input type="text" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Ubah" class="btn btn-dark">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>