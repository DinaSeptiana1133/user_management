<?php
require_once '../config/db.php';


$username = $_POST['nama_lengkap'];
$redirect = 'cp.php';
if(isset($_POST['ganti'])){
    $paslam = $_POST['paslam'];
    $pasnew = $_POST['pasnew'];
    $conpas = $_POST['conpas'];

    $query = "select * from users where nama_lengkap='".$username."'";
    $sql = $db->query($query);
    $cek = $sql->fetch_assoc();
    if ($sql->num_rows == 0){
        echo "<script>alert('maaf, username $username tidak ditemukan :('); window.location='$redirect';</script>";
    } elseif ($paslam=='' || $pasnew=='' || $conpas==''){
        echo "<script>alert('form tidak boleh kosong'); window.location='$redirect';</script>";
    } elseif ($pasnew !== $conpas){
        echo "<script>alert('pass tdk sama'); window.location='$redirect';</script>";
    } elseif ($pasnew !==  $conpas){
        echo "<script>alert('pass tdk cocok'); window.location='$redirect';</script>";
    } else {
        $query="update users set password='".password_hash($pasnew, PASSWORD_DEFAULT)."' where id='".$cek['id']."'";
        $sql = $db->query($query);
        if($sql){
            echo "<script>alert('pw berhasil disimpan'); window.location='$redirect';</script>";
        } else {
            echo "<script>alert('pass ggl'); window.location='$redirect';</script>";
        }
    }
}
?>