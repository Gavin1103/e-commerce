<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/header.php");

$productID = $_GET["productID"];

$productQuery = $con->prepare("SELECT name, price, img FROM `ecommerce` WHERE id =  ?");
if ($productQuery === false) {
    trigger_error(mysqli_error($con));
} else {
    $productQuery->bind_param('i', $productID);
    $productQuery->bind_result($productName, $price, $img);
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
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                        <br>
                        <br>
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                        content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                        and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        <br>
                        <br>
                        Various versions have evolved over the years, sometimes by accident,
                        sometimes on purpose (injected humour and the like).
                        Various versions have evolved over the years, sometimes by accident,
                        sometimes on purpose (injected humour and the like).
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                        content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                        and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        <br>
                        <br>
                        Various versions have evolved over the years, sometimes by accident,
                        sometimes on purpose (injected humour and the like).
                        Various versions have evolved over the years, sometimes by accident,
                        sometimes on purpose (injected humour and the like).
                    </p>
                </div>
                <button href="winkelwagen.php" onclick="product_toevoegen()" id="winkelwagen-knop">In winkelwagen</button>
            </div>
        </div>
    </div>
</main>
<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/footer.php");
?>