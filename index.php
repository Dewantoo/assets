<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>

<body>
	<header>
		<h3>Data Mahasiswa</h3>
	</header>

	<h4>Menu</h4>
	<nav>
		<?php if (isset($_GET['status'])) : ?>
			<p>
				<?php 
				if ($_GET['status'] == 'sukses') {
					echo "Pendaftaran berhasil!";
				} else {
					echo "Pendaftaran gagal!";
				}
				?>
			</p>
		<?php endif; ?>
		<ul>
			<li><a href="daftar.php">Daftar Baru</a></li>
			<li><a href="list.php">List</a></li>
		</ul>
	</nav>

</body>

</html>