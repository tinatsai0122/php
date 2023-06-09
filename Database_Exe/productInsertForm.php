<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Product Insert Form</h1>
<form action="./productInsertTraitement.php" method="POST">
    <label for="product">Product Name</label>
    <input type="text" id="nameProduct" name="nameProduct"><br>
    <label for="description">Product Description</label>
    <input type="text" id="description" name="description"><br>
    <label for="price">Unit Price</label>
    <input type="number" id="price" name="price"><br>
    <input type="submit" value="Submit"><br>
</form>

    
</body>
</html>