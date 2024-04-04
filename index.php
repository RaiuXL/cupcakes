<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cupcake</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form action="process.php" method="post">
        <label for="fname">Your Name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="Please input your name"><br>
        <label for="cupcakeFlavors">Cupcake flavors:</label><br>
        <input type="checkbox" id="cupcake1" name="flavor[]" value="The Grasshopper">
        <label for="cupcake1">The Grasshopper</label><br>
        <input type="checkbox" id="cupcake2" name="flavor[]" value="Whiskey Maple Bacon">
        <label for="cupcake2">Whiskey Maple Bacon</label><br>
        <input type="checkbox" id="cupcake3" name="flavor[]" value="Carrot Walnut">
        <label for="cupcake3">Carrot Walnut</label><br>
        <input type="checkbox" id="cupcake4" name="flavor[]" value="Salted Caramel Cupcake">
        <label for="cupcake4">Salted Caramel Cupcake</label><br>
        <input type="checkbox" id="cupcake5" name="flavor[]" value="Red Velvet">
        <label for="cupcake5">Red Velvet</label><br>
        <input type="checkbox" id="cupcake6" name="flavor[]" value="Lemon Drop">
        <label for="cupcake6">Lemon Drop</label><br>
        <input type="checkbox" id="cupcake7" name="flavor[]" value="Tiramisu">
        <label for="cupcake7">Tiramisu</label><br>
        <input type="submit" value="Submit">
    </form><br>

</body>
</html>
<?php

