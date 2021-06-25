<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/header.php");




?>
<main>


    <div id="afrekenen-container">

        <div id="afrekenen-content-links">

        

        </div>

        <div id="afrekenen-content-rechts">
            <div id="melding"></div>
            <form id="form-afrekenen" method="POST">
                <input type="submit" value="afrekenen">
                <input id="naam" type="text" placeholder="naam*">
                <input id="#" type="text" placeholder="tussenvoegsel">
                <input id="achternaam" type="text" placeholder="achternaam*">
                <input id="straatnaam" type="text" placeholder="straatnaam*">
                <input id="postcode" type="text" placeholder="postcode*">
                <input id="stad" type="text" placeholder="stad*">
                <input id="email" type="text" placeholder="E-mail*">
                <input id="telefoonnummer" type="text" placeholder="telefoonnummer*">
                <select id="betaalmethode" name="betaalmethode">
                    <option value="ideal">ideal</option>
                    <option value="creditcard">creditcard</option>
                    <option value="paypal">paypal</option>
                    <option value="mastercard">mastercard</option>
                </select>
                <input type="submit" value="afrekenen">
            </form>
        </div>


        <div id="afrekenen-content-rechts-melding">

            <h3>Bedankt voor uw bestelling</h3>
            <p>Voor 23:59 besteld? Morgen in huis!</p>
            <p>U ontvangt binnen 1 uur een bevestigings E-mail</p>
            <p>De track and trace ontvangt u bij de bevestigings E-mail</p>
            <p>Als u nog vragen heeft, klik dan <a href="#">hier</a></p>

        </div>

    </div>




</main>
<?php
include("/xampp/htdocs/programming/keuzedeel/e-commerce/core/footer.php");

?>