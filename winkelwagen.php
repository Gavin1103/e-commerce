<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/header.php");




?>
<main>

    <div id="winkelwagen-container">
        <div id="winkelwagen-content">
            <?php

            $productQuery = $con->prepare("SELECT name, price, img FROM `ecommerce`");
            if ($productQuery === false) {
                trigger_error(mysqli_error($con));
            } else {
                // $productQuery->bind_param('i', $productID);
                $productQuery->bind_result($productName, $price, $img);
                if ($productQuery->execute()) {
                    $productQuery->store_result();
                    while ($productQuery->fetch()) {
            ?>

                        <div class="product-winkelwagen">
                            <div style="background-image: url(<?php BASEURL; ?>assets/img/<?php echo $img ?>);" class="product-winkelwagen-img"></div>
                            <div class="info-container">

                                <h3><?php echo $productName ?></h3>
                                <p>prijs: <?php echo  '$', $price ?></p>
                            </div>

                            <div class="aantal-container">
                                <p>aantal:</p>
                                <input class="aantal-input" type="number" value="0">
                            </div>

                        </div>

            <?php
                    }
                }
                $productQuery->close();
            }
            ?>


            <p>Intotaal: </p>
            <a href="" id="afrekenen-knop">
                afrekenen
            </a>
        </div>
    </div>
</main>
<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/footer.php");

?>