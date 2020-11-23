<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirim dari url
$nim = $_GET['nim'];

//menghapus data dari database
$data = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim=$nim");

echo "<script>alert('DATA TELAH DIHAPUS');</script>";
echo "<script>location='dataanggota.php';</script>";

//mengalihkan halaman kembali ke index.php
//header("location:dataanggota.php");

?>