<?php
session_start();
include "../koneksi.php";
$prof = mysqli_query($koneksi, "SELECT * FROM profile");
$profile = mysqli_fetch_array($prof);

// simpen sosmed
if(isset($_POST['simpenpf'])){
    $idn = $_POST['idnya'];
    $bio = $_POST['bio'];
    $lfoto = $_POST['linkfoto'];
    $nama = $_POST['nama'];


    $updatedataa = mysqli_query($koneksi,"UPDATE `profile` SET foto = '$lfoto', bio = '$bio', nama = '$nama' WHERE `profile`.`id` = '$idn';");
    //cek apakah berhasil
    if ($updatedataa){

        echo " <div class='alert alert-success'>
            <strong>Success!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
        <meta http-equiv='refresh' content='2; url= profile.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Gagal!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
         <meta http-equiv='refresh' content='2; url= profile.php'/> ";
        }
};

// simpen sosmed
if(isset($_POST['simpenabout'])){
    $id = $_POST['id'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    


    $updatedataa = mysqli_query($koneksi,"UPDATE `about` SET foto = '$foto', text = '$deskripsi' WHERE `about`.`id` = '$id';");
    //cek apakah berhasil
    if ($updatedataa){

        echo " <div class='alert alert-success'>
            <strong>Success!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
        <meta http-equiv='refresh' content='2; url= profile.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Gagal!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
         <meta http-equiv='refresh' content='2; url= profile.php'/> ";
        }
};
?>
<!doctype html>
<html lang="en">

<head>
    <title>Galeri Sosmed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5d3285099a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(<?=$profile['foto']?>);"></a>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="profile.php">Profile & About</a>
                    </li>
                    <li >
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

            <div class="row">
                <div class="col-6">
                <?php
                    $p = mysqli_query($koneksi,"select * from profile");
                    $pf = mysqli_fetch_array($p);
                    ?>
                    <form method="post">
                        <input type="text" value="<?=$pf['id']?>" hidden name="idnya">
                        <div class="text-center">
                        <img src="<?=$pf['foto']?>" width="200" height="200" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="form-group">
                            <label for="wa">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?=$pf['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">Bio</label>
                            <input type="text" name="bio" class="form-control" value="<?=$pf['bio']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">URL Image</label>
                            <input class="form-control" type="text" name="linkfoto" value="<?=$pf['foto']?>">
                        </div>
                        
                        <button type="submit" class="btn btn-warning form-control" name="simpenpf">Simpan</button>
                    </form>
                </div>
                <div class="col-6">
                    <?php
                    $ab = mysqli_query($koneksi,"select * from about");
                    $abo = mysqli_fetch_array($ab);
                    ?>
                    <form method="post">
                        <input type="text" value="<?=$abo['id']?>" hidden name="id">
                        <div class="text-center">
                        <img src="<?=$abo['foto']?>" width="200" height="200" style="border-radius: 50%;" alt="">
                        </div>
                        <div class="form-group">
                            
                            <label for="wa">Deksripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"><?=$abo['text']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="wa">URL Image</label>
                            <input class="form-control" type="text" name="foto" value="<?=$abo['foto']?>">
                        </div>
                        
                        <button type="submit" class="btn btn-warning form-control" name="simpenabout">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>