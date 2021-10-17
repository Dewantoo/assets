<?php

include("config.php");

if (isset($_POST['daftar'])){
	$nama = $_POST['nama'];
	$fakultas = $_POST['fakultas'];

	$sql = "INSERT INTO mahasiswa (nama, fakultas) VALUE ('$nama', '$fakultas')";
	$query = mysqli_query($db, $sql);

	if ( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses Dilarang.");	
 } 

?>