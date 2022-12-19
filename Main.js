let y = document.createElement('p');
y.innerHTML = '0';
y.id = "tir";

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

/*Javascript2*/ 
let slideIndex1 = 0;
showSlides1();

function showSlides1() {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex1 ++;
  if (slideIndex1 > slides.length) {slideIndex1 = 1}
  slides[slideIndex1 - 1].style.display = "block";
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}

let slideIndex2 = 0;
showSlides2();

function showSlides2() {
  let i;
  let slides = document.getElementsByClassName("mySlides2");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex2 ++ ; 
  if (slideIndex2 > slides.length) {slideIndex2 = 1}
  slides[slideIndex2 - 1].style.display = "block";
  setTimeout(showSlides2, 2000);
}

let slideIndex3 = 0;
showSlides3();

function showSlides3() {
  let i;
  let slides = document.getElementsByClassName("mySlides3");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex3 ++ ; 
  if (slideIndex3 > slides.length) {slideIndex3 = 1}
  slides[slideIndex3 - 1].style.display = "block";
  setTimeout(showSlides3, 2000);
}

let slideIndex4 = 0;
showSlides4();

function showSlides4() {
  let i;
  let slides = document.getElementsByClassName("mySlides4");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex4 ++ ; 
  if (slideIndex4 > slides.length) {slideIndex4 = 1}
  slides[slideIndex4 - 1].style.display = "block";
  setTimeout(showSlides4, 2000);
}

let slideIndex5 = 0;
showSlides5();

function showSlides5() {
  let i;
  let slides = document.getElementsByClassName("mySlides5");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex5 ++ ; 
  if (slideIndex5 > slides.length) {slideIndex5 = 1}
  slides[slideIndex5 - 1].style.display = "block";
  setTimeout(showSlides5, 2000);
}

let slideIndex6 = 0;
showSlides6();

function showSlides6() {
  let i;
  let slides = document.getElementsByClassName("mySlides6");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex6 ++ ; 
  if (slideIndex6 > slides.length) {slideIndex6 = 1}
  slides[slideIndex6 - 1].style.display = "block";
  setTimeout(showSlides6, 2000);
}

function myFunction() {
    let x = document.getElementsByClassName("temp");
    if(x[0].style.display === "block") {
      x[0].style.display = "none";
    }else {
      x[0].style.display = "block";
    }
}

function ggg() {
  document.getElementById("myModal").style.display = "block";
}

function hhh() {
  document.getElementById("myModal").style.display = "none";
}