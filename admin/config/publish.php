<?php
require 'function.php';
?>
<?php
if ($_GET["id"]){
$id = $_GET["id"];
$flag = $_GET["flag"];

if (publish($id) > 0) {
	header('location:../main.php?pages=kategori');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kode"]){
$kode = $_GET["kode"];
$flag = $_GET["flag"];

if (publishcus($kode) > 0) {
	header('location:../main.php?pages=customer');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kodes"]){
$kode = $_GET["kodes"];
$flag = $_GET["flag"];

if (publishsup($kode) > 0) {
	header('location:../main.php?pages=supplier');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kodeb"]){
$kode = $_GET["kodeb"];
$flags = $_GET["flags"];

if (publishbar($kode) > 0) {
	header('location:../main.php?pages=barang');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
else{
	echo "string";
}
?>