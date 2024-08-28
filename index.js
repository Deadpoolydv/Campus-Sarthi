const menuButton = document.getElementById('menu-button');
const menu = document.getElementById('myLinks');

menuButton.addEventListener('click', () => {
  menu.classList.toggle('show');
});


// IMAGE SLIDER

const slides = document.querySelectorAll(".slides img");
let slideIndex = 0;
let intervalId = null;

document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider(){
    if(slides.length > 0){
        slides[slideIndex].classList.add("displaySlide");
        intervalId = setInterval(nextSlide, 5000);
    }
}

function showSlide(index){
    if(index >= slides.length){
        slideIndex = 0;
    }
    else if(index < 0){
        slideIndex = slides.length - 1;
    }

    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");
}

function prevSlide(){
    clearInterval(intervalId);
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide(){
    slideIndex++;
    showSlide(slideIndex);
}




// For Responsible Mobile View 

function checkWindowSize() {
    const windowWidth = window.innerWidth;
    const threshold = 1000; // adjust this value to your needs
  
    if (windowWidth <= threshold) {
      document.documentElement.classList.add('small-screen');
    }
     else {
      document.documentElement.classList.remove('small-screen');
    }
  }
  
  window.addEventListener('resize', checkWindowSize);
  checkWindowSize(); 