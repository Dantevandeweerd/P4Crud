function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function showSlide1() {
  document.getElementById("hotel-slide1").style.display = "flex";
  document.getElementById("hotel-slide2").style.display = "none";
  document.getElementById("showslide1-button").style.display = "none";
  document.getElementById("showslide2-button").style.display = "flex";
}
function showSlide2() {
  document.getElementById("hotel-slide1").style.display = "none";
  document.getElementById("hotel-slide2").style.display = "flex";
  document.getElementById("showslide1-button").style.display = "flex";
  document.getElementById("showslide2-button").style.display = "none";
}

function inlogCheck() {
  var email = document.getElementById("email").value;
  var wachtwoord = document.getElementById("wachtwoord").value;

  if (email === "" || wachtwoord === "") {
    alert("Vul alstublieft alle velden in.");
    return false;
  }

  return true;
}
function registerCheck(){
  var email = document.getElementById("emial").value;
  var wachtwoord = document.getElementById("wachtwoord").value;
  var bevesting = document.getElementById("bevestig-wachtwoord").value;

  if (email === "" || wachtwoord === "" || bevesting === "") {
    alert("Vul alstublieft alle velden in.");
    return false;
  }

  return true;
}
