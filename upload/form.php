<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST" action="./upload.php">
        Code <input type="text" name="input_iata"><br>
        Description <input type="text" name="input_description"><br>
        <input type="file" name="input_file" id="input_file"><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>