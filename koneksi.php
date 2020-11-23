<?php

$koneksi = mysqli_connect("localhost","root","","lab_perkuliahan");

//check connection
if (mysqli_connect_errno()){
	echo "koneksi ke database GAGAL :".mysli_connect_error();
}

?>
