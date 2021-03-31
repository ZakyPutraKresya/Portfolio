<?php

include "koneksi.php";

$prof = mysqli_query($koneksi, "SELECT * FROM profile");
$profile = mysqli_fetch_array($prof);

$sos = mysqli_query($koneksi,"SELECT * FROM sosmed");
$sosmedd = mysqli_fetch_array($sos);

?>
<section style="margin-top: 100px;">
     <div class="hero mt-5">
      <div class="inner-hero">
      <div class="left">
        <h1>hi,<br> i am <span class="name"><?=$profile['nama']?></span><br><?=$profile['bio']?></h1>
        <div class="button">
          <button class="btn"><a href="https://wa.me/<?=$sosmedd['wa']?>">Contact</a></button>
        </div>

      </div>
      <div class="right"><img class="img-fluid hero-image" src="<?=$profile['foto']?>"></div>
       </div>
       </div>
     </div>
</section>