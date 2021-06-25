//hamburgermenu
function hamburgerMenuButton() {
  var container = document.getElementById("container");
  var hamburgermenu = document.getElementById("nav-hamburgermenu");
  if (hamburgermenu.style.display === "flex") {
    hamburgermenu.style.display = "none";
  } else {
    hamburgermenu.style.display = "flex";
  }
  // if(container.style > "width:600px"){
  //   hamburgermenu.style.display = "none";
  // }

}

function product_toevoegen() {
  alert("ga naar de winkelwagen om je product(en) te zien");
}

var formulier = document.getElementById("form-afrekenen");
var naam = document.getElementById("naam");
var achternaam = document.getElementById("achternaam");
var straatnaam = document.getElementById("straatnaam");
var postcode = document.getElementById("postcode");
var stad = document.getElementById("stad");
var email = document.getElementById("email");
var telefoonnummer = document.getElementById("telefoonnummer");
// var betaalmethode = document.getElementById("betaalmethode");
var melding = document.getElementById("melding");

var afrekenen_content_rechts = document.getElementById("afrekenen-content-rechts");
var afrekenen_content_rechts_melding = document.getElementById("afrekenen-content-rechts-melding");
var melding_title_1 = document.getElementById("melding-title-1");
var melding_title_2 = document.getElementById("melding-title-2");
var klopt_niet = document.getElementById("klopt_het_niet");
// console.log("hallo");
formulier.addEventListener("submit", function (event) {

  event.preventDefault();

  if (
    (naam.value != "") &&
    (achternaam.value != "") &&
    (straatnaam.value != "") &&
    (postcode.value != "") &&
    (stad.value != "") &&
    (email.value != "") &&
    (telefoonnummer.value != "")
    
  ) {

    // alert("hallo");
    afrekenen_content_rechts.style = "display:none";
    afrekenen_content_rechts_melding.style = "display:flex";
    melding_title_1.style = "display:none";
    melding_title_2.style = "display:flex";
    klopt_niet.style = "display:none"
    

  } else {
    melding.style = "display:flex"
    melding.innerHTML = "alles met een ster moet ingevuld zijn!";
  }
})




// var backgroundimg = document.getElementById("json-img")
// var terug = document.getElementById("terug");
// var volgende = document.getElementById("volgende");
// // 
// var objectData;
// var objectNummer = 0;

// function loadData() {
//   fetch("assets/js/battlefield_img.json")
//     .then(response => response.json())
//     .then(data => init(data));
// }

// function init(data) {
//   objectData = data;
//   toonObject();
//   console.log(objectData)
// }

// function verder() {
//   objectNummer = objectNummer + 1;
//   if (objectNummer > objectData.battlefieldImg.length - 1) {
//     objectNummer = 0;
//   }
//   toonObject()
// }

// function vorige() {
//   objectNummer = objectNummer - 1;
//   if (objectNummer < 0) {
//     objectNummer = objectData.battlefieldImg.length - 1;
//   }
//   toonObject()
// }

// function toonObject() {

//   var image = objectData.battlefieldImg[objectNummer].img;
//   backgroundimg.innerHTML = image;

//   // backgroundimg.style.cssText = `background-image:url(img/${image})`;
// }

// loadData()