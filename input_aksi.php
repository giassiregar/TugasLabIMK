<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];



//menginput data ke database
mysqli_query($koneksi,"INSERT INTO mahasiswa VALUE('$nim','$nama','$jurusan','$alamat')");


echo "<script>alert('DATA TELAH DITAMBAHKAN');</script>";
echo "<script>location='dataanggota.php';</script>";

//mengalihkan halaman kembali ke index.php
//header("location: dataanggota.php");

?>