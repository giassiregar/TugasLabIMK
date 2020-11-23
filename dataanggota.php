<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
	
</head>
<body>
	<ul>
  	<a class="navbar-brand" href="#">e-Library</a>
  	<li><a href="index.php">Home</a></li>
  	<li><a class="active" href="dataanggota.php">Data Anggota</a></li>
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
		include 'koneksi.php';
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
