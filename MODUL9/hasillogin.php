<?php
session_start();
echo "Anda Berhasil Login Sebagai ".$_SESSION['uername']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<br>
Silahkan Logout dengan klik link <a href="logout.php"> Disini</a>