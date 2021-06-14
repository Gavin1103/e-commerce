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