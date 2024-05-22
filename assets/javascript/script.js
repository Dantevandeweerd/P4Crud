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
