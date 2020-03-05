<?php
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="DINA SEPTIANA">
    <title>User Management System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body class="bg-dark">
    <div class="jumbotron text-white text-center bg-secondary">
        <h2> User Management System </h2>
    </div>
    <div class="container btn-primary kotak_login">
    <nav class="navbar navbar-expand-sm-2 bg-dark navbar-dark">
        <form action="action/login.php" method="post" accept-charset="utf-8" autocomplete="off">
            <div class="form-group">
    			<label for="email" class="mr-sm-2">Email</label> <br>
    			<input type="email" name="email" class="form-control mb-2 mr-sm-2" placeholder="Masukkan Alamat Email" required>
    		</div>
    		<div class="form-group">
    			<label for="password" class="mr-sm-2">Password</label> <br>
    			<input type="password" name="password" class="form-control mb-2 mr-sm-2" placeholder="Masukkan Password" required>
    		</div>
    			<button type="submit" class="btn btn-primary mb-2 btn-block tm_login">Login</button>
          <hr>
          <div class="text-center">
                    <a class="text-danger" href="forgot-password.html">Forgot Password?</a>
                  </div>
          <p class="text-center bg-dark text-white">Belum punya akun? <a class="bg-white text-dark" href="registration.php">Create an Account!</a></p>
        </form>
    </nav>
    </div>
</body>
</html>