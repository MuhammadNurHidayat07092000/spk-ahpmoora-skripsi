<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <form method="POST" action="cek_login.php">
        <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
        <p>Masukkan username dan password anda dengan benar!</p>

        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="masukkan username">
          <label for="floatingInput">Masukkan Username</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="masukkan password">
          <label for="floatingPassword">Masukkan Password</label>
        </div>
        <div class="form-group">
          <select class="form-control" name="level" id="level">
            <option value="Arsip">--- Login Sebagai ---</option>
            <option value="Arsip">Arsip</option>
            <option value="Perpustakaan">Perpustakaan</option>
            <option value="Pembinaan">Pembinaan</option>
            <option value="Sekertariat">Sekertariat</option>
          </select>
        </div>

        
        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy;Perpusda Bima 2023</p>
      </form>
    </main>
  </body>
</html>
