// mobile button header

const menu = document.querySelector("#mobile__menu");
const menulinks = document.querySelector(".navbar__menu");

menu.addEventListener("click", function () {
  menu.classList.toggle("is-active");
  menulinks.classList.toggle("active");
});

//play video preview2 on hovering
let clip = document.querySelector(".vod");
clip.addEventListener("mouseover", function (e) {
  clip.play();
});
clip.addEventListener("mouseout", function (e) {
  clip.pause();
});

// go to top button
mybutton = document.getElementById("btn__top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// show password toggle

var state=false;
function passtoggle(){
  if (state){
    document.getElementById("password").setAttribute("type","password");
    document.getElementById("show").style.color='#7a797e';
    state=false;
  }
  else{
    document.getElementById("password").setAttribute("type","text");
    document.getElementById("show").style.color='#5887ef';
    state=true;

  }
}
function passtoggle2(){
  if (state){
    document.getElementById("password2").setAttribute("type","password");
    document.getElementById("show2").style.color='#7a797e';
    state=false;
  }
  else{
    document.getElementById("password2").setAttribute("type","text");
    document.getElementById("show2").style.color='#5887ef';
    state=true;

  }
}