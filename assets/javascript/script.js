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
function registerCheck() {
  var email = document.getElementById("emial").value;
  var wachtwoord = document.getElementById("wachtwoord").value;
  var bevesting = document.getElementById("bevestig-wachtwoord").value;

  if (email === "" || wachtwoord === "" || bevesting === "") {
    alert("Vul alstublieft alle velden in.");
    return false;
  }

  return true;
}

function wachtwoordChecker() {
  var password = document.getElementById("wachtwoord").value;
  var bevestig = document.getElementById("bevestig-wachtwoord").value;

  var minLengte = /.{8,}/;
  var hooftletter = /[A-Z]/;
  var cijfer = /\d/;
  var specialetekens = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

  var isminLengte = minLengte.test(wachtword);
  var hfhooftletter = hooftletter.test(wachtword);
  var hfcijfer = cijfer.test(wachtword);
  var hfspecialetekens = specialetekens.test(wachtword);
  var zelfdeCheck = wachtwoord === bevestig;
  if (!zelfdeCheck) {
    alert("wacht is niet het zelfde");
  }

  return isminLengte && hfhooftletter && hfcijfer && hfspecialetekens;
}

function wachtwoordvalidatie() {
  var isValid = wachtwoordChecker();
  if (isValid) {
    alert("Wachtword heeft niet alle eisen");
  }
}
function wachtwoordChecker() {
  const wachtwoord = document.getElementById("wachtwoord").value;
  const bevestig = document.getElementById("bevestig-wachtwoord").value;

  const minLengte = /.{8,}/;
  const hooftletter = /[A-Z]/;
  const cijfer = /\d/;
  const specialetekens = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

  const isminLengte = minLengte.test(wachtwoord);
  const hfhooftletter = hooftletter.test(wachtwoord);
  const hfcijfer = cijfer.test(wachtwoord);
  const hfspecialetekens = specialetekens.test(wachtwoord);
  const zelfdeCheck = wachtwoord === bevestig;

  return (
    isminLengte && hfhooftletter && hfcijfer && hfspecialetekens && zelfdeCheck
  );
}

function wachtwoordvalidatie() {
  const isValid = wachtwoordChecker();
  if (!isValid) {
    alert("Wachtword heeft niet alle eisen of wachtwoord is niet het zelfde");
    return false;
  }
  return true;
}
