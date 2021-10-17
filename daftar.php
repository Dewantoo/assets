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