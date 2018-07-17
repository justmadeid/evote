<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projectkelas";

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

function tampil($tampil){

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
	$tambah_kategori = htmlspecialchars(trim(stripcslashes($data["kategori"])));

	$query = "INSERT INTO kategori VALUES ('','$tambah_kategori','1')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	$id = $_GET["id"];
	$hapus_data = "DELETE FROM kategori WHERE id = $id";
	mysqli_query($conn, $hapus_data);
	return mysqli_affected_rows($conn);
}

function update($data){

	global $conn;
	$id = $_GET["id"];
	$edit_kategori = htmlspecialchars(trim(stripcslashes($data["kategori"])));
	$id = htmlspecialchars(trim(stripcslashes($data["id"])));

	$query = "UPDATE kategori SET 
					 kategori = '$edit_kategori'
					 WHERE id = $id;
					 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

?>