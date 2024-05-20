function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function showSlide1() {
  document.getElementById("hotel-slide1").style.display = "block";
  document.getElementById("hotel-slide2").style.display = "none";
  document.getElementById("showslide1-button").style.display = "none";
  document.getElementById("showslide2-button").style.display = "block";
}
function showSlide2() {
  document.getElementById("hotel-slide1").style.display = "none";
  document.getElementById("hotel-slide2").style.display = "block";
  document.getElementById("showslide1-button").style.display = "block";
  document.getElementById("showslide2-button").style.display = "none";
}
