<?php
$currentPage = 'inicio';
require_once "paginas/header.php";
require_once 'paginas/config.php';
?>

  <div class="container">
  <div class="jumbotron">



  <h1><center>Bienvenido a <?php echo $nombre ?></center></h1>

  <p><h3><center>Ip: mc.ecmods.com</center><h3></p>

   <?php

    if($data['status'] == false)

  { ?>

	  <center><p><?php echo $nj; ?></p></center>

  <?php } 

  else 

   { ?>

	  <center><p><?php echo $sj; ?> <?php echo $b; ?>/<?=$data['players']['max']?></p></center>

  <?php } ?>



</div>
</div>
<?php
require_once "paginas/footer.php";
?>