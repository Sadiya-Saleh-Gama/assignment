var slideIndex = 0;

function showSlides() {
  var i;
  setTimeout(showSlides, 5000);
  var slides = document.getElementsByClassName("mySlides");
  var slide2 = document.getElementsByClassName("mySlides2");
  var slide3 = document.getElementsByClassName("mySlides3");
  var slide4 = document.getElementsByClassName("mySlides4");


  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    slide2[i].style.display = "none";
    slide3[i].style.display = "none";
    slide4[i].style.display = "none";    		


  }
  slideIndex++;

  if (slideIndex > slides.length) {
      slideIndex = 1;
    
    }    

  slides[slideIndex-1].style.display = "block";
  slide2[slideIndex-1].style.display = "block";
  slide3[slideIndex-1].style.display = "block";
  slide4[slideIndex-1].style.display = "block";
    
}
window.addEventListener('load', showSlides);
