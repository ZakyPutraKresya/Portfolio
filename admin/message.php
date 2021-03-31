<?php
session_start();
include "../koneksi.php";
$prof = mysqli_query($koneksi, "SELECT * FROM profile");
$profile = mysqli_fetch_array($prof);

//mengatasi jika user langsung masuk menggunakan link, tanpa login
if(empty($_SESSION['id']) or empty($_SESSION['username']))
{
  echo "<script>
      alert('Maaf, untuk mengakses halaman ini, Silahkan Login terlebih dahulu!');
      document.location='index.php';
      </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5"
                    style="background-image: url(<?=$profile['foto']?>);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="profile.php">Profile & About</a>
                    </li>
                    <li>
                        <a href="gallery.php">Gallery & Sosmed</a>
                    </li>
                    <li>
                        <a href="message.php">Pesan</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><?=$_SESSION['nama']?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php

            $m = mysqli_query($koneksi,"SELECT * FROM pesan");
            while($msg = mysqli_fetch_array($m)){
                $idm = ['id'];
            ?>
            <div class="card mt-3">
                <div class="card-header">
                    Pesan dari <?=$msg['email']?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?=$msg['pesan']?></p>
                        <footer class="blockquote-footer">Pesan ini dikirim oleh <cite title="Source Title"><?=$msg['nama']?></cite></footer>
                    </blockquote>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>