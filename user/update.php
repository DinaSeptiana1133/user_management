<?php 
require_once '../config/db.php';
$email= isset($_POST['email']) ? $_POST['email'] : ''; 
$username = $_POST['nama_lengkap']; 
$query=mysqli_query($db, "update users set nama_lengkap='".$username."', email='".$email."' where email='".$email."'"); 
if($query){ 
 echo "Berhasil update data ke database "; 
} else { 
 echo "Gagal update data";
}
    header('Location: index.php');
?>