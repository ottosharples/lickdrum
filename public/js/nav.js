function myFunction() {
    var x = document.getElementById("myTopnav");
    var logo = document.getElementById("logo");
    var header = document.getElementById("header");
    if (x.className === "topnav") {
        x.className += " responsive";
        logo.className += " responsive";
    } else {
        x.className = "topnav";
        logo.className = "logo";
    }
}