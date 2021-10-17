<?php 

include("config.php");

if ( !isset($_GET['id']) ){
	header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1 ){
	die("data tidak ditemuakan.");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>

<body>
	<header>
		<h3>Data Mahasiswa</h3>
	</header>
	<form action="pendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" />
		</p>
		<p>
			<label for="alamat">Fakultas: </label>
			<input type="text" name="fakultas" placeholder="Apa Fakultas Anda" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>		
	</form>
</body>
</html>