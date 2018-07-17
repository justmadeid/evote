<?php
include "koneksi.php";

$username = htmlspecialchars(stripslashes(trim($_POST['username'])));
$password = htmlspecialchars(stripslashes(trim($_POST['password'])));
$perintah = "select * from login WHERE username = '$username' and password = '$password'";
$hasil = mysql_query($perintah);
$row = mysql_fetch_array($hasil);
if ($row['username'] == $username AND $row['password'] == $password) {
	session_start();
	$_SESSION['username'] = $username;
	header("location:main.php?pages=utama");
}
else {
	echo"<script>alert('Username atau Password Salah')</script>";
    echo"<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>