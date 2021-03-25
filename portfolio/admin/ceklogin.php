<?php
session_start();
include "../koneksi.php";

//password diamankan dengan enkripsi kriptografi md5
@$pass = md5($_POST['password']);

//mysqli_escape_string fungsinya untuk mengamankan karakter aneh yang diinputkan user, seperti sql injection

@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi, "SELECT * from admin_user WHERE username='$username' and password = '$password' ");
$data = mysqli_fetch_array($login);
if($data)
{
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
    header('location:dashboard.php');
}
else
{
    echo "Login gagal Password salah";
}

?>
