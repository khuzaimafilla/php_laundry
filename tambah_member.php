<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH MEMBER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
?>
<div class="container">
        <h1>Tambah Member</h1>
        <form action="proses_tambah_member.php" method="post">
            Nama Member : <br>
            <input type="text" name="nama" value="" class="form-control"><br>
            Alamat : <br>
            <textarea name="alamat" class="form-control"
            rows="4"></textarea><br>
            Gender : <br>
            <select name="gender" class="form-control">
                <option></option>
                <option value="laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select><br>
            Telepon : <br>
            <input type="text" name="tlp" class="form-control"> 
                </br>
          
            <br><input type="submit" name="simpan" value="Submit" class="btn btn-dark"></br>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>