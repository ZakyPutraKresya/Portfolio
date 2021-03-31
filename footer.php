<?php

include "koneksi.php";

$sos = mysqli_query($koneksi,"SELECT * FROM sosmed");
$sosmedd = mysqli_fetch_array($sos);

$prof = mysqli_query($koneksi, "SELECT * FROM profile");
$profile = mysqli_fetch_array($prof);

?>
<footer>
  <div class=" footer-bg pt-4">
    <div class="footer-sec">
    <div class="footer-left">
      <h3><?=$profile['nama']?></h3>
      <p>all rights are reserved</p>
      <div class="social-icons">
        <a href="https://www.facebook.com/<?=$sosmedd['fb']?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://twitter.com/<?=$sosmedd['twitter']?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
        <a  href="https://www.linkedin.com/in/<?=$sosmedd['linkedin']?>/" target="_blank"><i class="fab fa-linkedin"></i></a>        
        <a href="https://github.com/<?=$sosmedd['github']?>" target="_blank"><i class="fab fa-github-square"></i></a>
      </div>
      <small class="mt-2">Follow gan</small>
</div>
    </div>
  </div>
</footer>