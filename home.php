<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home LAUNDRY</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    <br>
<center>
    <h1>
    <b>W  e  l  c  o  m  e  !
        <br> 
            ""<?=$_SESSION['nama']?>""</b></h1>
    <div class="circular-image"> 
        <img style="border:10px solid black" class="rounded-circle" src="https://c.tenor.com/0zdIhlJiBfwAAAAd/brick-washing-machine.gif" alt="" width="300" height="300">
    </div>
    <br><a href="proses_logout.php" class="btn btn-dark">Log Out</a></br>
</center>
</body>
</html>