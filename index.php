<?php

include "koneksi.php";

if(isset($_POST['kirimpesan'])){
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $email = $_POST['email'];



    $kirimp = mysqli_query($koneksi,"INSERT INTO pesan VALUES('', '$nama', '$email', '$pesan');");
    //cek apakah berhasil
    if ($kirimp){

        echo "<script>
        alert('Pesan Berhasil Dikirim, Terimakasih atas Pesannya!');
        document.location='index.php';
        </script>";
        } else { 
        echo "<script>
        alert('Pesan Gagal Dikirim, Silahkan Coba lagi!');
        document.location='index.php';
        </script>";
        }
};

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>myportfolio</title>
</head>

<body>

    <!-- navbar -->
    <?php
   require "navbar.php";
   ?>

    <!-- hero section -->
    <?php
   require "profile.php";
   ?>

    <!-- about section -->
    <?php
   require "about.php";
   ?>


    <!-- --------------- skil section ----------------- -->

    <section id="skill">
        <div class="container">
            <div class="title_sec">
                <h3 class="inner-title mt-3">Skill</h3>
            </div>
            <div class="skill-sec">
                <div class="skill-left">

                    <div class="personal">
                        <h2>Profesional Skills</h2>
                    </div>
                    <div class="skill-data">

                        <div class="skill-area shadow">
                            <div class="skill-area-inner">

                                <div class="skill-icon">
                                    <i class="fab fa-html5"></i>
                                </div>

                                <div class="skill-name">
                                    <span>HTML5</span>
                                </div>

                                <div class="skill-per ">
                                    <span>75%</span>
                                </div>

                            </div>
                            <div class="skill-bar html-bar "></div>

                        </div>

                        <!-- ----------------------------- -->

                        <div class="skill-area shadow">
                            <div class="skill-area-inner">

                                <div class="skill-icon">
                                    <i class="fab fa-css3-alt"></i>
                                </div>

                                <div class="skill-name">
                                    <span>CSS3</span>
                                </div>

                                <div class="skill-per ">
                                    <span>40%</span>
                                </div>

                            </div>
                            <div class="skill-bar css-bar "></div>

                        </div>

                        <!-- --------------------------------------- -->

                        <div class="skill-area shadow">
                            <div class="skill-area-inner">

                                <div class="skill-icon">
                                    <i class="fab fa-php"></i>
                                </div>

                                <div class="skill-name">
                                    <span>Bootstrap</span>
                                </div>

                                <div class="skill-per ">
                                    <span>85%</span>
                                </div>

                            </div>
                            <div class="skill-bar php-bar "></div>

                        </div>

                        <!-- --------------------------------- -->

                        <div class="skill-area shadow">
                            <div class="skill-area-inner">

                                <div class="skill-icon">
                                    <i class="fab fa-js-square"></i>
                                </div>

                                <div class="skill-name">
                                    <span>JavaScript</span>
                                </div>

                                <div class="skill-per ">
                                    <span>65%</span>
                                </div>

                            </div>
                            <div class="skill-bar js-bar "></div>

                        </div>

                    </div>

                </div>

                <div class="skill-right ">
                    <img src="https://i.postimg.cc/7bvT04QH/app-development-PNG.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------- work section ----------------------- -->
    <?php
require "gallery.php";
?>


    <!-- ------------- contact section --------------- -->

    <section id="contact">
        <div class="container">
            <div class="title_sec" style="margin-top: 70px;">
                <h3 class="inner-title">Contact</h3>
            </div>
            <div class="contact">
                <div class="contact-inner">

                    <form method="POST">
                        <div class="form-group">
                            <input type="name" class="form-control" name="nama" placeholder="name" required="">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email" required="">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" required rows="6" name="pesan" placeholder="Message here..."></textarea>
                        </div>


                        <button type="submit" name="kirimpesan" class="btn btn-primary send">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- ------------------- footer section ------------------ -->
    <?php
require "footer.php";
?>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>