/* BANNIERE */
/*
// Get the accept and decline buttons
var acceptButton = document.getElementById("cookie-banner-accept");
var declineButton = document.getElementById("cookie-banner-decline");

// Add event listeners to the buttons
acceptButton.addEventListener("click", acceptCookies);
declineButton.addEventListener("click", declineCookies);

function acceptCookies() {
  // Code to set a cookie indicating that the user has accepted cookies goes here
  document.getElementById("cookie-banner").style.display = "none";
}

function declineCookies() {
  // Code to set a cookie indicating that the user has declined cookies goes here
  document.getElementById("cookie-banner").style.display = "none";
}

/* Import the js-cookie library
const Cookies = require("js-cookie");

function acceptCookies() {
  // Set the cookie with a 1-year expiration time
  Cookies.set("acceptCookies", "true", { expires: 365 });
  document.getElementById("cookie-banner").style.display = "none";
}

function declineCookies() {
  Cookies.set("acceptCookies", "false", { expires: 365 });
  // Code to do something if the user declines cookies goes here
  document.getElementById("cookie-banner").style.display = "none";
}*/

document.addEventListener('DOMContentLoaded', (event) => {
    // Vérifie si le cookie a déjà été défini
    if(!Cookies.get("cookieBannerDisplayed")){
        //Récupère les boutons d'acceptation et de refus
        var acceptButton = document.getElementById("cookie-banner-accept");
        var declineButton = document.getElementById("cookie-banner-decline");
        // Ajoute les écouteurs d'événements aux boutons
        acceptButton.addEventListener("click", acceptCookies);
        declineButton.addEventListener("click", declineCookies);
    }else{
        document.getElementById("cookie-banner").style.display = "none";
    }
});

function acceptCookies() {
    // Code pour définir un cookie indiquant que l'utilisateur a accepté les cookies ici
    Cookies.set("acceptCookies", "true", { expires: 365 });
    Cookies.set("cookieBannerDisplayed", "true", { expires: 365 });
    document.getElementById("cookie-banner").style.display = "none";
}

function declineCookies() {
    // Code pour définir un cookie indiquant que l'utilisateur a refusé les cookies ici
    Cookies.set("acceptCookies", "false", { expires: 365 });
    Cookies.set("cookieBannerDisplayed", "true", { expires: 365 });
    document.getElementById("cookie-banner").style.display = "none";
}


