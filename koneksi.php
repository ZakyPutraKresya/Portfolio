<?php  

//Database Konfigurasi
$server 	= "localhost"; //Nama Server
$username 	= "root"; //username database server
$pass		= ""; //password database server
$database 	= "portfolio"; //Nama Database

//Membuat koneksi ke database
$koneksi = mysqli_connect($server , $username, $pass, $database) or die(mysqli_error($koneksi));

?>