<?php
require_once '../config/db.php';
$id=$_GET['id'];
$query=mysqli_query($db, "delete from users where id='$id'"); 
if($query){ 
    echo "<script>
            alert ('Data Berhasil Dihapus');
        </script>"
 ?>
 <script language="javascript">document.location.href="tables.php";
 </script>
 <?php 
}else{ 
        echo "Gagal hapus Data";
}
?>