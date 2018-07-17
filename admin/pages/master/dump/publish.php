<?php
require 'function.php';
$id = $_GET["id"];
$flag = $_GET["flag"];

if (publish($id) > 0) {
	header('location:../../main.php?pages=kategori');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
?>