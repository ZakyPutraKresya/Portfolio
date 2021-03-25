<?php

include "koneksi.php";


$abo = mysqli_query($koneksi,"SELECT * FROM about");
$about = mysqli_fetch_array($abo);

$prof = mysqli_query($koneksi, "SELECT * FROM profile");
$profile = mysqli_fetch_array($prof);
?>

<section class="jumbotron" id="about">
     <div class="container">
      <div class="title_sec" style="margin-top: -40px;">
       <h3 class="inner-title">About</h3>
       </div>
       <div class="intro">
      <div class="about-left"><img style="border-radius: 50%;" src="<?= $about['foto']?>" class="shadow img-fluid"></div>


       <div class="about-right">
        <h3>I'm <?=$profile['nama']?></h3>
        <p>
          <?=$about['text']?>
        </p>
      </div>
      </div>
     </div>
</section>