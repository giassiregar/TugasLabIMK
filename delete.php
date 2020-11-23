<?php
//koneksi database
include 'koneksi.php';

if(!isset($_SESSION['admin'])) {
	echo "<script>alert('Hei, kamu! Kamu belum login. Silahkan login terlebih dahulu.');</script>";
	echo "<script>location='index.php';</script>";
	exit();
}

//menangkap data id yang dikirim dari url
$nim = $_GET['nim'];

//menghapus data dari database
$data = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim=$nim");

echo "<script>alert('DATA TELAH DIHAPUS');</script>";
echo "<script>location='dataanggota.php';</script>";

//mengalihkan halaman kembali ke index.php
//header("location:dataanggota.php");

?>
