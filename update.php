<?php
include 'koneksi.php';

if(!isset($_SESSION['admin'])) {
	echo "<script>alert('Hei, kamu! Kamu belum login. Silahkan login terlebih dahulu.');</script>";
	echo "<script>location='index.php';</script>";
	exit();
}

$ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
$pecah = mysqli_fetch_array($ambil);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Keanggotaan</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class='awal'>
		<div class='container'>
			<div class="text">Ubah Data Keanggotaan</div>
			<form method="POST">
				<div class="form-row">
					<div class="input-data">
						<input type="text" name="nim" value="<?php echo $pecah['nim'];?>" required>
						<div class="underline"></div>
						<label>NIM</label>
					</div>
					<div class="input-data">
						<input type="text" name="nama" value="<?php echo $pecah['nama']; ?>" required><div class="underline"></div><label>Nama Anggota</label>
					</div>
				</div>
				<div class="form-row">
					<div class="input-data">
						<input type="text" name="jurusan" value="<?php echo $pecah['jurusan']; ?>" required><div class="underline"></div><label>Jurusan</label>
					</div>
					<div class="input-data">
						<input type="text" name="alamat" value="<?php echo $pecah['alamat']; ?>" required><div class="underline"></div><label>Alamat</label>
					</div>
				</div>
					<div class="form-row submit-btn">
						<div class="input-data">
							<div class="inner"></div>
							<input type="submit" name="ubah" value="Ubah Data">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>


<?php 
if(isset($_POST['ubah'])) {
	$koneksi->query("UPDATE mahasiswa SET nim='$_POST[nim]', nama='$_POST[nama]', jurusan='$_POST[jurusan]', alamat='$_POST[alamat]' WHERE nim='$_GET[nim]'");
	echo "<script>alert('Data Anggota Berhasil Diubah');</script>";
		echo "<script>location='dataanggota.php';</script>";
}
?>
