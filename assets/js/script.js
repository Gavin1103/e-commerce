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

function product_toevoegen(){

  alert("ga naar de winkelwagen om je product(en) te zien")

}





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

