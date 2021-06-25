<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/connect_db.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/mediaquerry.css">
    <title>Keuzedeel E-commerce</title>
</head>

<body>
    <div id="container">
        <nav>
            <button onclick="hamburgerMenuButton()" id="hamburgermenu"></button>
            <ol id="nav-ol">
                <li class="nav-li"><a href="index.php" class="nav-a">Home</a></li>
                <li class="nav-li"><a href="#" class="nav-a">Categorieen<a class="nav-a"></li>
                <li class="nav-li"><a href="#" class="nav-a">Consoles<a class="nav-a"></li>
                <li class="nav-li"><a href="#" class="nav-a">Contact<a class="nav-a"></li>
            </ol>



            <div id="gratis-verzending">
                <h5>Gratis verzending</h5>
            </div>
            <div id="cart-container">
                <a href="winkelwagen.php" class="cart-link"><img src="assets/img/cart.jpg"></a>
            </div>


        </nav>
        <div id="nav-hamburgermenu">
            <ol id="hamburgermenu-ol">
                <li class="hamburgermenu-li">Home</li>
                <li class="hamburgermenu-li">Categorieen</li>
                <li class="hamburgermenu-li">Consoles</li>
                <li class="hamburgermenu-li">Contact</li>
            </ol>
        </div>