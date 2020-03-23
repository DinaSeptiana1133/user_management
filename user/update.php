<?php 
require_once '../config/db.php';

$email      = isset($_POST['email']) ? $_POST['email'] : '';  // tangkap email dari form yang di submit
$username   = $_POST['nama_lengkap']; // tangkap nama lengkap dari form yang di submit

// cari data user berdasarkan email
$query      = "SELECT * FROM users WHERE email = '".$email."'";
$sql        = mysqli_query($db, $query);

// Cek apabila data user lebih dari 0 === ada
if (mysqli_num_rows($sql) > 0) {
    
    // Jika data user ada, maka keluarkan datanya
    $user = mysqli_fetch_assoc($sql);
    // Kemudian update data user berdasarkan email yang ada pada variabel $user berdasarkan email
    $query=mysqli_query($db, "update users set nama_lengkap='".$username."', email='".$email."' where email='".$user['email']."'");
    
    // Cek apakah proses query berhasil?
    if($query){ 
        // Jika berhasil maka tampilkan pesan berikut
        echo "Berhasil update data ke database";
        // Kemudian ubah value session dengan data yang baru
        $_SESSION['nama_lengkap'] = $username;
        $_SESSION['email'] = $email;
    } else { 
        // Jika gagal maka tampilkan pesan ini.
        echo "Gagal update data";
    }

} else {
    // Jika data user tidak ada, maka tampilkan ini
    echo "Data tidak ada";
}
header('Location: index.php');
?>