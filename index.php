<?php
session_start();
error_reporting(0);
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <form class="box" action="" method="POST">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username" value="">
      <input type="password" name="password" placeholder="Password" value="">
      <input type="submit" name="login" value="Login">
    </form>
  </body>
</html>

<?php
if(isset($_POST["login"])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $ambil = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

  $akunyangcocok = mysqli_num_rows($ambil);

  if($akunyangcocok > 0){
    $akun = $ambil->fetch_assoc();
    $_SESSION["admin"] = $akun;
    echo "<script>alert('Sukses Login!');</script>";
    echo "<script> location='dataanggota.php';</script>";
  }
  else {
    echo "<script>alert('Gagal Login!');</script>";
  }
}

?>
