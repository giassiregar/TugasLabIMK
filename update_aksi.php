<?php
// koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];


// update data ke database
$data = mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',alamat='$alamat' WHERE nim='$nim'");

echo "<script>alert('DATA TELAH DIUBAH');</script>";
echo "<script>location='dataanggota.php';</script>";

//mengalihkan halaman kembali ke dataanggota.php
//header("location:dataanggota.php");

?>