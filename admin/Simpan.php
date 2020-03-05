<?php 
require_once '../config/db.php';
$id= isset($_POST['id']) ? $_POST['id'] : ''; 
$email = $_POST['email'];
$username = $_POST['nama_lengkap']; 
$query=mysqli_query($db, "update users set nama_lengkap='".$username."', email='".$email."' where id='".$id."'"); 
if($query){ 
 echo "Berhasil update data ke database "; 
} else { 
 echo "Gagal update data";
}
    header('Location: tables.php');
?>