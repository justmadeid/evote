<?php
require 'function.php';
?>
<?php
if ($_GET["id"]){
$id = $_GET["id"];

if (hapus($id) > 0) {
	header('location:../main.php?pages=kategori');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kode"]){
$kodecus = $_GET["kode"];

if (hapuscus($kodecus) > 0) {
	header('location:../main.php?pages=customer');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kodes"]){
$kodesup = $_GET["kodes"];

if (hapussup($kodesup) > 0) {
	header('location:../main.php?pages=supplier');
	echo "<script language='javascript'>swal('ok', 'Data Berhasil di Hapus!', 'warning');</script>";
}else {
	echo "<script language='javascript'>swal('ok', 'Data Gagal di Hapus!', 'error');</script>";
}
}
elseif($_GET["kodeb"]){
$kodebar = $_GET["kodeb"];

if (hapusbar($kodebar) > 0) {
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