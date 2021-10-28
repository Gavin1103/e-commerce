<?php
include("core/header.php");

$productID = $_GET["productID"];

$productQuery = $con->prepare("SELECT name, price, img, info FROM `ecommerce` WHERE id =  ?");
if ($productQuery === false) {
    trigger_error(mysqli_error($con));
} else {
    $productQuery->bind_param('i', $productID);
    $productQuery->bind_result($productName, $price, $img, $info);
    if ($productQuery->execute()) {
        $productQuery->store_result();
        while ($productQuery->fetch()) {
?>
<?php
        }
    }
    $productQuery->close();
}
?>


<main>
    <div class="titel-container">
        <h2>Bestellen</h2>
    </div>

    <div id="bestel-container">
        <div id="bestel-container-links">

            <div class="product-blok-bestel">
                <div id="json-img" class="product-blok-img-bestel" style="background-image: url(<?php BASEURL; ?>assets/img/<?php echo $img ?>);">

                    <div class="title-prijs-bestel">
                        <h2><strong><?php echo $price; ?></strong></h2>
                    </div>
                </div>
                <div class="title-blok-bestel">
                    <button onclick="vorige()" class="vorige-volgende-knop" id="terug">vorige</button>
                    <h2><?php echo $productName; ?></h2>
                    <button onclick="verder()" class="vorige-volgende-knop" id="volgende">volgende</button>
                </div>
            </div>
        </div>
        <div id="bestel-container-rechts">
            <div class="content-rechts-container">
                <h2>Informatie over <?php echo $productName ?></h2>
                <br>
                <div class="tekst-container-bestel">
                    <p>
                    <?php echo $info ?>
                        
                        <br>
                        <br>
                    <ul style="margin-left: 15px ;">
                        <li>Prijs:$<?php echo $price ?></li>
                        <li>Game: <?php echo $productName ?> </li>
                    </ul>
                    </p>
                </div>
                <a href="winkelwagen.php" id="winkelwagen-knop">In winkelwagen</a>
            </div>
        </div>
    </div>
</main>
<?php
include("footer.php");
?>