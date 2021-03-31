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

// Update data
if(isset($_POST['updategalery'])){
    $id_galeri = $_POST['id_galeri'];
    $nama_foto = $_POST['nama_foto'];
    $link_foto = $_POST['link_foto'];


    $updatedata = mysqli_query($koneksi,"UPDATE `galerry` SET link_foto = '$link_foto', nama_foto = '$nama_foto'  WHERE `galerry`.`id_galeri` = '$id_galeri';");
    //cek apakah berhasil
    if ($updatedata){

        echo " <div class='alert alert-success'>
            <strong>Success!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
        <meta http-equiv='refresh' content='2; url= gallery.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Gagal!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
         <meta http-equiv='refresh' content='2; url= gallery.php'/> ";
        }
};

// simpen sosmed
if(isset($_POST['simpensosmed'])){
    $id = $_POST['id'];
    $wa = $_POST['wa'];
    $fb = $_POST['fb'];
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    $ig = $_POST['ig'];
    $twitter = $_POST['twitter'];


    $updatedataa = mysqli_query($koneksi,"UPDATE `sosmed` SET fb = '$fb', wa = '$wa', ig = '$ig', linkedin = '$linkedin', twitter = '$twitter', github = '$github'  WHERE `sosmed`.`id` = '$id';");
    //cek apakah berhasil
    if ($updatedataa){

        echo " <div class='alert alert-success'>
            <strong>Success!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
        <meta http-equiv='refresh' content='2; url= gallery.php'/>  ";
        } else { echo "<div class='alert alert-warning'>
            <strong>Gagal!</strong> Halaman akan di Refresh setelah 2 Detik.
          </div>
         <meta http-equiv='refresh' content='2; url= gallery.php'/> ";
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
                    <li>
                        <a href="profile.php">Profile & About</a>
                    </li>
                    <li class="active">
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
                    <div class="card">
                        <div class="card-header">
                            Gallery
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Klik tombol dibawah untuk melihat</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora cum
                                optio vitae natus distinctio! Sed molestiae similique deleniti maxime architecto.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#listGaleri" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="listGaleri" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
											$gale=mysqli_query($koneksi,"SELECT * FROM galerry");
                                            
											$no=1;
											while($galeri=mysqli_fetch_array($gale)){
                                                $idga = $galeri['id_galeri'];
												?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="200" src="<?php echo $galeri['link_foto'] ?>" alt="">
                                                </td>


                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?=$idga;?>"
                                                        class="btn btn-sm btn-info"><i class="fa fa-pencil"></i>
                                                        Ubah</a>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="edit<?=$idga;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data <br>
                                                                    <?php echo $galeri['nama_foto']?>
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="id_galeri">ID</label>
                                                                    <input type="text" id="id_galeri" name="id_galeri"
                                                                        class="form-control"
                                                                        value="<?php echo $galeri['id_galeri'] ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama_foto">Nama Foto</label>
                                                                    <input type="text" id="nama_foto" name="nama_foto"
                                                                        class="form-control"
                                                                        value="<?php echo $galeri['nama_foto'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="link_foto">URL Image</label>
                                                                    <input type="text" id="link_foto" name="link_foto"
                                                                        class="form-control"
                                                                        value="<?php echo $galeri['link_foto'] ?>">
                                                                </div>
                                                                

                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success"
                                                                    name="updategalery">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php 
											}
											?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <?php
                    $sos = mysqli_query($koneksi,"select * from sosmed");
                    $ssmd = mysqli_fetch_array($sos);
                    ?>
                    <form method="post">
                        <input type="text" value="<?=$ssmd['id']?>" hidden name="id">
                        <div class="form-group">
                            <label for="wa">No Whatsapp</label>
                            <input class="form-control" type="text" name="wa" value="<?=$ssmd['wa']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">Username Github</label>
                            <input class="form-control" type="text" name="github" value="<?=$ssmd['github']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">Username FB</label>
                            <input class="form-control" type="text" name="fb" value="<?=$ssmd['fb']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">Username Twitter</label>
                            <input class="form-control" type="text" name="twitter" value="<?=$ssmd['twitter']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">LinkedIn</label>
                            <input class="form-control" type="text" name="linkedin" value="<?=$ssmd['linkedin']?>">
                        </div>
                        <div class="form-group">
                            <label for="wa">Username Instagram</label>
                            <input class="form-control" type="text" name="ig" value="<?=$ssmd['ig']?>">
                        </div>
                        <button type="submit" class="btn btn-warning form-control" name="simpensosmed">Simpan</button>
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