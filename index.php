<?php
include("core/header.php");
?>

<header id="header-index">

</header>
<main>
    <div class="titel-container">
        <h2>Populairste Games</h2>
    </div>
    <div id="scroll-container">
        <section class="section-index">
            <!-- <div class="product-blok-container"> -->
            <?php
            $liqry = $con->prepare("SELECT id, name, img, price FROM `ecommerce`");
            if ($liqry === false) {
                trigger_error(mysqli_error($con));
            } else {
                // $liqry->bind_param('s', $categoryName, $categoryDescription);
                $liqry->bind_result($id, $gameName, $img, $price);
                if ($liqry->execute()) {
                    $liqry->store_result();
                    while ($liqry->fetch()) {
            ?>
                        <a href="bestellen.php?productID=<?php echo $id ?>" class="link-product">
                            <div class="product-blok">
                                <div class="product-blok-img" style="background-image: url(<?php BASEURL; ?>assets/img/<?php echo $img ?>);">
                                    <div class="title-prijs">
                                        <h2><strong><?php echo $price; ?></strong></h2>
                                    </div>
                                </div>
                                <div class="title-blok">
                                    <h2><?php echo $gameName; ?></h2>
                                </div>
                            </div>
                        </a>
            <?php
                    }
                }
                $liqry->close();
            }
            ?>
            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>


            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>

            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>

            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>

            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>
            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>
            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>
            <div class="product-blok">
                <div class="product-blok-img nep-product">
                    <div class="title-prijs">
                        <h2><strong>$59,00</strong></h2>
                    </div>
                </div>
                <div class="title-blok">
                    <h2>Battlefield 6</h2>
                </div>
            </div>

        </section>
    </div>
    
</main>
<?php
include("core/footer.php");
?>