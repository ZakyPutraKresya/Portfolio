<?php
session_start();
include "../koneksi.php";

$email = $_GET['email'];
$nama = $_GET['nama'];
$pesan = $_GET['pesan'];

require_once __DIR__ . '/mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
ob_start(); 

//mengatasi jika user langsung masuk menggunakan link, tanpa login
if(empty($_SESSION['id']) or empty($_SESSION['username']))
{
  echo "<script>
      alert('Maaf, untuk mengakses halaman ini, Silahkan Login terlebih dahulu!');
      document.location='index.php';
      </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>

</head>
<body>
    <div class="image" style="text-align: center;">
        <img src="images/logo.png" alt="logotb" width="125">
        <br>
        <h2>Rekap Pesan</h2>
    </div>
    <br><br><br>
    <div class="teksemail" style="font-family:Georgia, 'Times New Roman', Times, serif;">
    Dari : <?=$email?>
    </div>
    <br><br><br>
    <p style="text-align: justify;"><?=$pesan?></p>
    <br><br>
    <div class="teksttd" style="margin-left: 500px;">
    <p>Yang Ber-TTD dibawah ini</p>
    <br>
    <img src="images/ttd.png" alt="ttd">
    <h3 style="margin-left: 25px;"><?=$nama?></h3>
    </div>
</body>
</html>

<?php
 $html = ob_get_contents(); 
 ob_end_clean();
 $mpdf->WriteHTML(utf8_encode($html));
 $mpdf->Output("Pesan $nama.pdf" ,'I');
?>