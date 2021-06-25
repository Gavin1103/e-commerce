<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/header.php");




?>
<main>

    <div id="winkelwagen-container">
        <div id="winkelwagen-content">
            <form action="afrekenen.php" method="POST">
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
                                    <select name="aantal">
                                        <option name="aantal_0" value="0">0</option>
                                        <option name="aantal_1" value="1">1</option>
                                        <option name="aantal_2" value="2">2</option>
                                        <option name="aantal_3" value="3">3</option>
                                        <option name="aantal_4" value="4">4</option>
                                    </select>
                                </div>
                            </div>
                <?php
                        }
                    }
                    $productQuery->close();
                }
                ?>

                <div class="betalen-container">
                    <p>Intotaal: $00.00 </p>
                    <input type="submit" href="afrekenen.php" id="afrekenen-knop" value="Afrekenen">
                    </input>
                </div>

            </form>
        </div>
    </div>
</main>
<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/footer.php");

?>