<?php
session_start();

include 'koneksi.php';

if(!isset($_SESSION['admin'])) {
	echo "<script>alert('Hei, kamu! Kamu belum login. Silahkan login terlebih dahulu.');</script>";
	echo "<script>location='index.php';</script>";
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style>
body {background-image: url(latarbiru.png); background-size: 1380px;}
table, th ,td{border: 1px solid black; text-align: center; height: 50px; width: 900px}
td{border: 1px solid black;}

ul {list-style-type: none;margin: 0;padding: 0;overflow: auto;background-color: #333; width: 100%;}
li {float: left;}
li a {display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;}
li a:hover:not(.active) {background-color: white;}
.active {background-color: #4CAF50;}
</style>
</head>
<body>
	<ul>
	<li><a class="navbar-brand" href="#">e-Library</a></li>
  	<li><a href="index.php">Home</a></li>
  	<li><a class="active" href="dataanggota.php">Data Anggota</a></li>
	<li><a href="logout.php">Logout</a></li>
	</ul>
	<center><fieldset style="background-color: white;width: 500px; height: 70px; margin: 20px;"><h2 align="center" style="color:black;">DATA ANGGOTA PERPUSTAKAAN </h2></fieldset>
	<center><p>____________________________________________________________</p>
	<br/>
	<center><a href="input.php"class="btn btn-success">TAMBAH DATA<a></center>
	<br/>
	<br/> 
	<table border=2 align="center" style="background-color: white" width= "1200px">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jurusan']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td>
				<a href="update.php?nim=<?php echo $d['nim']; ?>" class="btn btn-primary">EDIT</a>
				<a href="delete.php?nim=<?php echo $d['nim']; ?>" class="btn btn-danger">DELETE</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table></fieldset>

</body>
</html>
