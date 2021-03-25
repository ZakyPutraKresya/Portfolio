<?php

include "koneksi.php";
?>
<section id="work">
  <div class="container">
      <div class="title_sec" style="margin-top: 70px;">
        <h3 class="inner-title">Work</h3>
      </div>
     <div class="work-sec">
    <?php
    $gale = mysqli_query($koneksi, "SELECT * FROM galerry");
    while($galeri = mysqli_fetch_array($gale)){
        $idg = $galeri['id_galeri'];
    ?>
      <a href="#"><img src="<?=$galeri['link_foto']?>"></a>
      <?php
    }
    ?>
    </div>
  </div>
</section>