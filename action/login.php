<?php 
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
  header('Location: ../index.php');
}

// definisi variabel berdasarkan post parameter
$email 		= $_POST['email'];
$password 	= $_POST['password'];


$sql 	= "SELECT nama_lengkap, email, password, is_admin FROM users WHERE email = '".$email."'";
$query 	= $db->query($sql)or die('Error: '. $db->error);
$user = $query->fetch_assoc();

// jika data null, maka pengguna dialihkan ke index
if(is_null($user)){
  header('Location: ../index.php');
}

// verifikasi password pengguna
if(password_verify($password, $user['password'])){
  
  // cek apakah pengguna adalah admin?
  if ($user['is_admin'] == 0){
    $_SESSION['level'] = 0; 
    $_SESSION['email'] = $user['email'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    header('Location: ../user/index.php'); #dashboard user
  } else {
    $_SESSION['level'] = 1;
    $_SESSION['email'] = $user['email'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    header('Location: ../admin/index.php'); #dashboard admin
  }
} else {
  header('Location: ../index.php');
}
?>