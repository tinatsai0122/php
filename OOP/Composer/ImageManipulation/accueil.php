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

    $image = Image::load('./images/face.webp');

?>
</body>
</html>