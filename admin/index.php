<?php
session_start();
session_destroy();
?>
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
   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
   <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

   <main class="form-signin">
      <form action="checkLogin.php" method="POST">
         <img class="mb-4" src="../assets/img/desa-karangtengah-2.png" alt="" width="250">
         <h1 class="h3 mb-3 fw-normal">Login Admin</h1>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
            <label for="floatingInput">Username</label>
         </div>
         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
         </div>

         <div class="checkbox mb-3">
            <label>
               <input type="checkbox" value="remember-me"> Remember me
            </label>
         </div>
         <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
         <p class="mt-5 mb-3 text-muted"> &copy; Copyright 2022 - <strong><span>Pemerintah Desa Karangtengah</span></strong> </p>
      </form>
   </main>



</body>

</html>