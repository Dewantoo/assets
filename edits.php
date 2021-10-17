<?php

include("config.php");

if (isset($_POST['simpan'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$fakultas = $_POST['fakultas'];

	$sql = "UPDATE mahasiswa SET nama='$nama', fakultas='$fakultas' WHERE id=$id";
	$query = mysqli_query($db, $sql);

if ( $query) {
	header('Location: list.php');
} else {
	die("Gagal menyimpan perubahan.");
}
 	

} else {
	die("Akses Dilarang.");
} 
	
?>