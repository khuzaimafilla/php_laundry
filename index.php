<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login User</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
      body{
        background-image: url("https://image.freepik.com/free-photo/foam-bubbles-from-soap-shampoo-washing-white-background_52456-116.jpg");
        background-repeat:no-repeat;
        background-size:cover;
      }
      image{
        opacity:0.5;
      }
    </style>
    <link href="style.css" rel="stylesheet">
</head>
<body class="text-center">
      <div class="container">
        <main class="form-signin">
        <form action="proses_login.php" method="POST">
            <h1>L A U N D R Y</h1>
            <img class="mb-4" src="https://1.bp.blogspot.com/-8iUAoBlaDXs/XydkeTuLe3I/AAAAAAAAAG8/0hBkKsURAKQTM8FQ6DBEvHQS5_zjkYHrwCLcBGAsYHQ/s2048/logo%2Binstagram%2Bhitam%2Byogiancreative.png" alt="" width="100" height="100">
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" 
            name="username" placeholder="Insert Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" 
            name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>

            <p class="mt-5 mb-3 text-muted">&copy; CUCILAH SEBELUM DICUCI</p>
            <script>
              function Exit() {
                var x=confirm('Tetep masuk pake yg sudah ada ya?');
                if(x) window.close();
              }
            </script>
        </form>
        </main>
        </div>
  </body>
</html>