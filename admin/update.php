<?php 
require_once '../config/db.php';

$email         = isset($_POST['email']) ? $_POST['email'] : '';
$username   = $_POST['nama_lengkap'];


$query      = "SELECT * FROM users WHERE email = '".$email."'";
$sql        = mysqli_query($db, $query);

if (mysqli_num_rows($sql) > 0) {
    
    $user = mysqli_fetch_assoc($sql);
    $query=mysqli_query($db, "update users set nama_lengkap='".$username."' where email='".$email."'");
    
    if($query){ 
        echo "Berhasil update data ke database";
        $_SESSION['nama_lengkap'] = $username;
        $_SESSION['email'] = $email;
    } else { 
        echo "Gagal update data";
    }

} else {
    echo "Data tidak ada";
}
header('Location: index.php');
?>