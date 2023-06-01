<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Harjutus</title>
</head>

<body>
<div class="container">

<h1>Harjutus 07</h1>



<?php
/* Dajana Mähdi 10.03.2023 */
 

#Tervitus
echo "<br>Tervitus<br>";
function tervita($nimi) {
    echo "Hi, $nimi!";
  }
  
  $nimi = "paksuke";
  tervita($nimi);

  #Liitu uudisirjaga
  echo"<br><br>Uudiskiri<br>";
  function uudiskirja_liitumine() {
    echo '
    <form method="GET">
      <div class="form-group">
        <input type="text" id="Kasutajanimi">
        <small id="emailHelp" class="form-text text-muted">Sisesta oma mail</small>
      </div>
      <button type="submit" class="btn btn-primary">Liitu</button>
    </form>';
  }
  
  uudiskirja_liitumine();

?>