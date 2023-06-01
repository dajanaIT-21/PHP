<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 14</title>
</head>
<body>
<?php
?>
<?php
// Valime pildi
if (isset($_POST['submit'])) {
    $image = $_FILES['image']['tmp_name'];
    if (!empty($image)) {
        $imageData = getimagesize($image);
        $width = $imageData[0];
        $height = $imageData[1];
        $format = $imageData['mime'];
        
        // Kuvame pildi andmed
        echo "Original suurused:<br>";
        echo 'Laius: '.$width.'px<br>';
        echo 'Kõrgus: '.$height.'px<br>';
        echo 'Formaat: '.$format.'<br>';
        
        // Tee pisipilt
        $thumbnailWidth = $_POST['thumbnail_width'];
        $thumbnailHeight = $_POST['thumbnail_height'];
        $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
        $originalImage = imagecreatefromjpeg($image);
        imagecopyresampled($thumbnail, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);
        imagejpeg($thumbnail, 'thumbnail.jpg');
        
        // Kuvame pisipildi
        echo '<img src="thumbnail.jpg" />';
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Vali pilt: <input type="file" name="image" /><br><br>
    Vali väikse pildi laius: <input type="text" name="thumbnail_width" /><br><br>
    Vali väikse pildi kõrgus: <input type="text" name="thumbnail_height" /><br><br>
    <input type="submit" name="submit" value="Laadi üles" />
</form>

</body>
</html>