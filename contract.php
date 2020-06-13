<?php

  $token = $_GET['token'];





  include('includes/dbconfig.php');
  $ref = '/contact/'.$token;

  $fetchdata = $database->getReference($ref)->getValue();


$i = 0;
$imgs = $fetchdata['images'];

echo '<h1>  </h1>';

for($i;$i< count($imgs) ; $i++){


    echo '<center> <img src="files/'. $imgs[$i] .'"/> </center> <br> <hr> <br>';

}

   



  ?>