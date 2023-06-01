<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>H4</title>
</head>

<body>
<div class="container">
<h1>Harjutus 04</h1>

<form action = "#" method="get" class="form-group">
arv 1 / vanus/ külje väärtus / juubel <input type="number" name = "a" required><br>
arv 2 / vanus/ külje väärtus / KT hinne <input type="number" name = "b" required><br>
<input type="submit" value = "arvuta" class = "btn btn-success">
</form>

<?php
/* Dajana Mähdi
    Harjutus 4
    27.01.2023

*/

if(isset($_GET['a']) ){

$a = $_GET['a'];
$b = $_GET['b'];
$jaga = 0;

/*Jagamine*/

if ($b==0){ echo "<br> Nicht jagada nulliga";}



else{ $jaga = $a/$b; 
echo "<br> Jagamise vastus on ".$jaga;

/*Vanus*/
if($a < $b){ echo "<br> 2 on vanem kui  1"; }
else{echo "<br> 1 on vanem kui  2";}

/*ruut ja ristkülik*/
if($a == $b){echo "<br> Das ist root";}
else{echo "<br> Das ist ristkülik";}

/*juubel*/
if($a%5==0){echo "<br> juubel wow :|";}
else{echo "<br> Nicht juubel";}

/*Hinne*/

switch ($b){
case $b >= 10; 
echo"<br> Hinne on GUT!";
break;
case $b >= 5 && $b <= 9:
echo"<br> done";
break;
case $b <= 4; 
echo"<br> SURM!";
break;
default:
echo "Input your punktid";
}
}



}

?>


</div>
</body>
</html>