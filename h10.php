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
<h1>Harjutus 10</h1>



<menu>
<a href="documents/document1.php">document1</a> |
<a href="documents/document2.php">document2</a> |
<a href="documents/document3.php">document3</a> |
<a href="documents/document4.php">document4</a>

</menu>



<?php


$allowedDocuments = array('document1.php', 'document2.php', 'document3.php', 'document4.php');

// Funktsioon turvalise päringu kontrollimiseks
function isValidRequest($document) {
    global $allowedDocuments;
    
    // Kui päring sisaldab keelatud märke (nt. ".." või "/"), siis see on keelatud päring
    if (strpos($document, '..') !== false || strpos($document, '/') !== false) {
        return false;
    }
    
    // Kui päring ei kuulu lubatud dokumentide hulka, siis see on keelatud päring
    if (!in_array($document, $allowedDocuments)) {
        return false;
    }
    
    return true;
}

// Kontrollime, kas "document" parameeter on määratud
if (isset($_GET['document'])) {
    $requestedDocument = $_GET['document'];

    // Kontrollitakse päringu kehtivust
    if (!isValidRequest($requestedDocument)) {
        // Kehtetu päring, kuvatakse veateade
        echo "Lehte ei eksisteeri!";
    } else {
        // Kehtiv päring, kuvatakse vastav dokument
        $documentPath = 'documents/' . $requestedDocument;
        include($documentPath);
    }
} else {
    // "document" parameeter ei ole määratud, kuvatakse veateade
    echo "Lehte ei eksisteeri! Kaduge nüüd siit ära!!!";
}
?>





</div>
</body>
</html>