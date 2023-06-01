<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H1</title>
</head>
<body>
    
<div class="container">
<h3>Harjutus 1 ja 2 ja 3</h3>

<div class="container">
    <form action="#" method="get" class="form-group">
        <input type="number" name="a" required><br>
        <input type="number" name="b" required><br>
        <input type="number" name="c" required><br>
        <input type="submit" value="arvuta" class="btn btn-success">

    </form>

   
        


</div>




<?php

    /*
        dajana
        24.01.2023
        harjutus 1

    */







    #Iga harutus hakkab kommentaariga, kus in kirjas ülesande number, sinu nimi ja kuupäev

    #Programm väljastab kolme muutuja (nimi, sünniaasta, tähtkuju) väärtused ühe koodireaga. Kusjuures kõik in väljastades eraldi reall. Vastus täislausega.
    $nimi = "dajantsik";
    $aasta = 2005;
    $tahtkuju = "lõvi";
    echo "Nimi:".$nimi."<br>Aasta:".$aasta. "<br>Tähtkuju".$tahtkuju."<br>";
    #Väljasta järgnev lause: “It’s My Life” – Dr. Alban
    echo '"It\'s my life"- Dr. Alban<br>';



    
    #“Joonista” järgmine pilt
    echo "(\(\\<br>";
    echo "( -.-)<br>";
    echo 'o_(")(")<br>';    
    
    #Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel näidatakse ka tehet ja kuvatakse eraldi ridadel. 

    $arv1 = 2;
    $arv2 = 3;
    printf("%d+%d=%d <br>", $arv1, $arv2, $arv1 + $arv2);
    printf("%d-%d=%d <br>", $arv1, $arv2, $arv1 - $arv2);
    printf("%d*%d=%d <br>", $arv1, $arv2, $arv1 * $arv2);
    printf("%d/%d=%f <br>", $arv1, $arv2, $arv1 / $arv2);
    
    #Koosta kood, mis teisendab millimeetrid (mm) sentimeetriteks (cm) ja meetriteks (m). Vastus vormindatakse 2 kohta pärast koma.

    $mm = 200;
    $cm = round($mm / 10, 2);
    $m = round($mm / 1000, 2);
    printf("%dm>%0.2fm<br>", $mm, $cm);
    printf("%dmm>%0.2fm<br>", $mm, $m);

    #Leia täisnurkse kolmnurga ümbermõõt ja pindala. Vastused ümardada täisarvuni ja täislausega palun.

    $k1 = 100;
    $k2 = 50;
    $k3 = sqrt(pow($k1, 2) + pow($k2, 2));
    $s = $k1 * $k2 / 2;
    $p = $k1 + $k2 + $k3;
    printf("kolmnurga pindala: %d <br>", $s);
    printf("kolmnurga ümbermõõt: %d <br>", $s);

   
   





?>

 


</body>
</html>