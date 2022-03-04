<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
  <div class="container-fluid">
    <img class="rounded-circle" src="https://1.bp.blogspot.com/-8iUAoBlaDXs/XydkeTuLe3I/AAAAAAAAAG8/0hBkKsURAKQTM8FQ6DBEvHQS5_zjkYHrwCLcBGAsYHQ/s2048/logo%2Binstagram%2Bhitam%2Byogiancreative.png" alt="" width="40" height="40">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_user.php">Data Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_member.php">Data Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_paket.php">Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>