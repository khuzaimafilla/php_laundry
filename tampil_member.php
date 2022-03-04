<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MEMBER</title>
    <!-- CSS only -->
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
    <h1>Data Member</h1>
    <br>
    <form action = "tampil_member.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Cari noaon atuh?"/>
    </form>
    <div class="p-3 mb-2 bg-light text-dark">
    <table class="table">
      <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Gender</th>
      <th scope="col">Telpon</th>
      <th scope="col">Action</th>
    </tr>
      </thead>
      <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_member = mysqli_query($koneksi, "select * from member where id_member like '%$cari%' or nama like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_member = mysqli_query($koneksi, "select * from member");
    }
    while ($dt_member= mysqli_fetch_array($query_member)){?>
        <tr> 
            <td><?php echo $dt_member["id_member"];?></td>
            <td><?php echo $dt_member["nama"];?></td>
            <td><?php echo $dt_member["alamat"];?></td>
            <td><?php echo $dt_member["gender"];?></td>
            <td><?php echo $dt_member["tlp"];?></td>
            <td>
            <a href="ubah_member.php?id=<?=$dt_member['id_member']?>" class="btn btn-dark">Ubah</a>
              <a href="hapus_member.php?id=<?=$dt_member['id_member']?>" class="btn btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
      </tbody>
  </table>
  </div>
<br><a href="tambah_member.php" class="btn btn-dark">Tambah Member</a></br>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>