<?php
$servername = "localhost";
$username = "jusf8848_evote";
$password = "maga12.,se";
$database = "jusf8848_evote";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($tampil){

	global $conn;
	$result = mysqli_query($conn, $tampil);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows; 
}

function tambah($data){

	global $conn;
	$tambah_kategori = htmlspecialchars(trim(stripcslashes(strtoupper($data["namakat"]))));
	if (!empty($tambah_kategori)) {
		$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM kategori WHERE namakat='$tambah_kategori'"));
		if ($cek > 0) {
			echo"<script language='javascript'>swal('Sorry', 'Data Alerdy exist', 'error');</script>";
		}else{
			$query = "INSERT INTO kategori VALUES ('','$tambah_kategori','1')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}
	}else{
        echo "<script language='javascript'>swal('Sorry', 'Empty Data', 'error');</script>";
    }
}

function tambahcus($data){

	global $conn;
	$kode = htmlspecialchars(trim(stripcslashes($data["nm_lengkap"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["tempat_lahir"])));
	$email = htmlspecialchars(trim(stripcslashes($data["tanggal_lahir"])));
	$alamat = htmlspecialchars(trim(stripcslashes($data["alamat"])));
	$telp = htmlspecialchars(trim(stripcslashes($data["email"])));
	// $keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));

	if (!empty($nama)) {
		$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tb_user WHERE nama='$nama' OR email='$email' OR telp='$telp'"));
		if ($cek > 0) {
			echo "<script language='javascript'>swal('Sorry', 'Data Alerdy exist', 'error');</script>";
            return false;
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<script language='javascript'>swal('Sorry', 'Data email error', 'error');</script>";
		}
		else{
			$query = "INSERT INTO tb_user VALUES ('$kode','$nama','$email','$alamat','$telp','$keterangan','1')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}
	}
    else{
            echo "<script language='javascript'>swal('Sorry', 'Empty Data', 'error');</script>";
        }
}

function tambahsup($data){

	global $conn;
	$kode = htmlspecialchars(trim(stripcslashes($data["kodes"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["nama"])));
	$email = htmlspecialchars(trim(stripcslashes($data["email"])));
	$alamat = htmlspecialchars(trim(stripcslashes($data["alamat"])));
	$telp = htmlspecialchars(trim(stripcslashes($data["telp"])));
	$keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));
	if (!empty($nama)) {
		$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM supplier WHERE nama='$nama' OR email='$email' OR telp='$telp'"));
		if ($cek > 0) {
			echo "<script language='javascript'>swal('Sorry', 'Data Alerdy exist', 'error');</script>";
            return false;
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<script language='javascript'>swal('Sorry', 'Data email error', 'error');</script>";
		}
		else{
			$query = "INSERT INTO supplier VALUES ('$kode','$nama','$email','$alamat','$telp','$keterangan','1')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}
	}
    else{
        echo "<script language='javascript'>swal('Sorry', 'Empty Data', 'error');</script>";
    }
}

function tambahbar($data){

	global $conn;
	$kategori = htmlspecialchars(trim(stripcslashes($data["kategori"])));
	$kode = htmlspecialchars(trim(stripcslashes($data["kodeb"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["nama"])));
	$stok = htmlspecialchars(trim(stripcslashes($data["stok"])));
	$harga = htmlspecialchars(trim(stripcslashes($data["harga"])));
	$keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));
	$time = date("Y-m-d h:i:sa");
	$gambar = upload();
    
    if ($kategori < 1 ) {
        echo "<script language='javascript'>swal('Sorry', 'Please Select Category!', 'error');</script>";
        return false;
    }
    
	if (!$gambar) {
		return false;
	}

	if (!empty($nama)) {
		$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM barang_masuk WHERE nama='$nama'"));
		if ($cek > 0) {
			echo "<script language='javascript'>swal('Sorry', 'Data Alerdy exist', 'error');</script>";
		}else{
			$query = "INSERT INTO barang_masuk VALUES ('$kategori','$kode','$nama','$stok','$harga','$keterangan','1','$time','$gambar')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}
	}
}

function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script language='javascript'>swal('Please...', 'Upload Image', 'warning');</script>";
		return false;
	}

	$ekstensiGambarValid =['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script language='javascript'>swal('Sorry', 'Infalid Exstention', 'warning');</script>";
		return false;
	}

	if ($ukuranFile > 1000000) {
		echo "<script language='javascript'>swal('Sorry', 'OverSize', 'warning');</script>";
		return false;
	}

	$newname = '';
	$newname .= uniqid();
	$newname .= '.';
	$newname .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$newname);
	return $newname;
}

function hapus($id){
	global $conn;
	$id = $_GET["id"];
	$hapus_data = "DELETE FROM kategori WHERE id = $id";
	mysqli_query($conn, $hapus_data);
	return mysqli_affected_rows($conn);
}

function hapuscus($id){
	global $conn;
	$kodecus = $_GET["kode"];
	$hapus_cus = "DELETE FROM customer WHERE kode = '$kodecus'";
	mysqli_query($conn, $hapus_cus);
	return mysqli_affected_rows($conn);
}

function hapussup($id){
	global $conn;
	$kodesup = $_GET["kodes"];
	$hapus_sup = "DELETE FROM supplier WHERE kodes = '$kodesup'";
	$suc = mysqli_query($conn, $hapus_sup);
	return mysqli_affected_rows($conn);
}

function hapusbar($id){
	global $conn;
	$kodebar = $_GET["kodeb"];
	$hapus_bar = "DELETE FROM barang_masuk WHERE kodeb = '$kodebar'";
	mysqli_query($conn, $hapus_bar);
	return mysqli_affected_rows($conn);
}

function publish($id){
	global $conn;
	$id = $_GET["id"];
	$flag = $_GET["flag"];
	if ($flag == 1) {
		$query = "UPDATE kategori SET 
					 flag = 0
					 WHERE id = $id;
					 ";
	}
	elseif ($flag == 0) {
				$query = "UPDATE kategori SET 
					 flag = 1
					 WHERE id = $id;
					 ";
	}
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function publishcus($id){
	global $conn;
	$kode = $_GET["kode"];
	$flag = $_GET["flag"];
	if ($flag == 1) {
		$query = "UPDATE customer SET 
					 flag = 0
					 WHERE kode = '$kode';
					 ";
	}
	elseif ($flag == 0) {
				$query = "UPDATE customer SET 
					 flag = 1
					 WHERE kode = '$kode';
					 ";
	}
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function publishsup($id){
	global $conn;
	$kode = $_GET["kodes"];
	$flag = $_GET["flag"];
	if ($flag == 1) {
		$query = "UPDATE supplier SET 
					 flag = 0
					 WHERE kodes = '$kode';
					 ";
	}
	elseif ($flag == 0) {
				$query = "UPDATE supplier SET 
					 flag = 1
					 WHERE kodes = '$kode';
					 ";
	}
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function publishbar($id){
	global $conn;
	$kode = $_GET["kodeb"];
	$flags = $_GET["flags"];
	if ($flags == 1) {
		$query = "UPDATE barang_masuk SET 
					 flags = 0
					 WHERE kodeb = '$kode';
					 ";
	}
	elseif ($flags == 0) {
				$query = "UPDATE barang_masuk SET 
					 flags = 1
					 WHERE kodeb = '$kode';
					 ";
	}
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function update($data){

	global $conn;
	$edit_kategori = htmlspecialchars(trim(stripcslashes($data["namakat"])));
	$id = htmlspecialchars(trim(stripcslashes($data["id"])));
	$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM kategori WHERE namakat='$edit_kategori'"));
	if ($cek > 0) {
		echo"<script language='javascript'>swal('Please...', 'Upload Image', 'error');</script>";
	}else{
	$query = "UPDATE kategori SET 
					 namakat = '$edit_kategori'
					 WHERE id = $id;
					 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
}

function updatecus($data){

	global $conn;
	$kode = htmlspecialchars(trim(stripcslashes($data["kode"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["nama"])));
	$email = htmlspecialchars(trim(stripcslashes($data["email"])));
	$alamat = htmlspecialchars(trim(stripcslashes($data["alamat"])));
	$telp = htmlspecialchars(trim(stripcslashes($data["telp"])));
	$keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));
	$query = "UPDATE customer SET 
					 nama = '$nama', email = '$email', alamat ='$alamat', telp = '$telp', keterangan = '$keterangan'
					 WHERE kode = '$kode';
					 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatesup($data){

	global $conn;
	$kode = htmlspecialchars(trim(stripcslashes($data["kodes"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["nama"])));
	$email = htmlspecialchars(trim(stripcslashes($data["email"])));
	$alamat = htmlspecialchars(trim(stripcslashes($data["alamat"])));
	$telp = htmlspecialchars(trim(stripcslashes($data["telp"])));
	$keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));

	$query = "UPDATE supplier SET 
					 nama = '$nama', email = '$email', alamat ='$alamat', telp = '$telp', keterangan = '$keterangan'
					 WHERE kodes = '$kode';
					 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatebar($data){

	global $conn;
	$kategori = htmlspecialchars(trim(stripcslashes($data["kategori"])));
	$kode = htmlspecialchars(trim(stripcslashes($data["kodeb"])));
	$nama = htmlspecialchars(trim(stripcslashes($data["nama"])));
	$stok = htmlspecialchars(trim(stripcslashes($data["stok"])));
	$harga = htmlspecialchars(trim(stripcslashes($data["harga"])));
	$keterangan = htmlspecialchars(trim(stripcslashes($data["keterangan"])));
	$gambarlama = htmlspecialchars(trim(stripcslashes($data["gambarlama"])));
	$time = date("Y-m-d h:i:sa");
	if ( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarlama;
	}else{
		$gambar = upload();
	}

	$query = "UPDATE barang_masuk SET 
					 kategori = '$kategori',  nama ='$nama', stok = '$stok', harga = '$harga', keterangan = '$keterangan', tgl_masuk = '$time', gambar = '$gambar'
					 WHERE kodeb = '$kode';
					 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function register($data){
	global $conn;

	$username = htmlspecialchars(trim(strtolower(stripcslashes($data["username"]))));
	$telp = htmlspecialchars(trim(strtolower(stripcslashes($data["telp"]))));
	$nama = htmlspecialchars(trim(strtolower(stripcslashes($data["nama"]))));
	$email = htmlspecialchars(trim(strtolower(stripcslashes($data["email"]))));
	$level = htmlspecialchars(trim(strtolower(stripcslashes($data["level"]))));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$ckuser = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($ckuser)) {
		echo "";
		return false;
		// $use_er = true;
		// return false;
	}

	if ($password !== $password2) {
		echo "";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO admin VALUES('','$nama','$telp','$email','$username','$password','','1','$level')" );
	return mysqli_affected_rows($conn);

}

?>