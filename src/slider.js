// const sliderContainer=document.querySelector('.products__container') //Container dos Produtos
// const leftArroww=document.querySelector('.products__arrowLeft') //Seta Esquerda
// const rigthArrow=document.querySelector('.products__arrowRigth') // Seta Direita

// const scrollAmount=380

// //Slider para a Esquerda
// leftArroww.addEventListener('click',()=>{
//     sliderContainer.scrollLeft -= scrollAmount
// })

// //Slider para a Direita
// rigthArrow.addEventListener('click',()=>{
//     sliderContainer.scrollLeft += scrollAmount
// })


//Primeiro Slider
const slider = document.querySelector(".products__container"); //Container de produtos
const leftButton = document.querySelector(".products__arrowLeft"); //Seta esquerda
const rightButton = document.querySelector(".products__arrowRigth"); //Seta direita

//Segundo Slider
const slider2 = document.querySelector(".products__container2"); //Container de produtos
const leftButton2 = document.querySelector(".products__arrowLeft2"); //Seta esquerda
const rightButton2 = document.querySelector(".products__arrowRigth2"); //Seta direita


function getScrollDistance() {
  const screenWidth = window.innerWidth;

  // Ajusta a distância  do scroll com base em tamanhos de tela
  if (screenWidth > 1024) {
    return 1600; // Para telas grandes
  } else if (screenWidth > 768) {
    return 500; // Para tablets
  } else {
    return 370; // Para celulares
  }
}



function setupSlider(slider, leftButton, rightButton) {
    leftButton.addEventListener("click", () => {
      slider.scrollBy({
        left: -getScrollDistance(),
        behavior: "smooth",
      });
    });
  
    rightButton.addEventListener("click", () => {
      slider.scrollBy({
        left: getScrollDistance(),
        behavior: "smooth",
      });
    });
  }

  // Inicializa os sliders
document.addEventListener("DOMContentLoaded", () => {
    setupSlider(slider, leftButton, rightButton);
    setupSlider(slider2, leftButton2, rightButton2);
  });


window.addEventListener("resize", () => {
  console.log(`Nova distância de scroll: ${getScrollDistance()}px`);
});



