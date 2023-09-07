<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./vendor/autoload.php";

    use Spatie\Image\Image;

//    Image::load('./images/playa.jpg')
//        ->greyscale()
//        ->save('./images/playaGreys.jpg');
  
    $image = new Image ("./images/face.webp");
    $image->greyscale();
    $image->save("./images/faceGreys.webp");





?>
</body>
</html>