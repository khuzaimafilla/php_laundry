<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah User</title>
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
    $qry_get_user=mysqli_query($koneksi,"select * from user where id_user = '".$_GET['id']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <div class="container">
        <h3>Ubah User</h3>
        <form action="proses_ubah_user.php" method="post">
            <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
            Nama: <br>
            <input type="text" name="nama" value="<?=$dt_user['nama']?>" class="form-control">
            Username : <br>
            <input type="text" name="username" value="<?=$dt_user['username']?>" class="form-control">
            Password : <br>
            <input type="password" name="password" value="" class="form-control">
            Role : <br>
            <select name="role" class="form-control">
                <option></option>
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
            </select>
            <br>
            <input type="submit" name="simpan" value="Ubah" class="btn btn-dark">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>