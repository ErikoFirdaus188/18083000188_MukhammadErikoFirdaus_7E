<?php
include("koneksi.php");
if (isset($_GET['status'])) {
		if ($_GET['status'] == 'sukses') {
			echo "Pendaftaran berhasil";
		} else {
			die(mysqli_error($conn));
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<header>
		<h3>Data Mahasiswa</h3>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="daftar.php">Daftar Baru</a></li>
			<li><a href="list.php">List</a></li>
		</ul>
	</nav>
</body>
</html>