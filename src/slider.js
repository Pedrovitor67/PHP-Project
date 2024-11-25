   //LEMBRAR DE FAZER TRATAMENTO COM A SETA PARA ELA FICAR INDISPONÍVEL QUANDO O SLIDER ACABAR.
   
//Primeiro Slider(Produtos)
const slider = document.querySelector(".products__container"); 
const leftButton = document.querySelector(".products__arrowLeft"); 
const rightButton = document.querySelector(".products__arrowRigth"); 

//Segundo Slider(Produtos)
const slider2 = document.querySelector(".products__container2");
const leftButton2 = document.querySelector(".products__arrowLeft2");
const rightButton2 = document.querySelector(".products__arrowRigth2"); 

//Terceiro Slider(Produtos)
const slider3 = document.querySelector(".products__container3");
const leftButton3 = document.querySelector(".products__arrowLeft3");
const rightButton3 = document.querySelector(".products__arrowRigth3");

//Quarto Slider(Produtos)
const slider4 = document.querySelector(".products__container4");
const leftButton4 = document.querySelector(".products__arrowLeft4");
const rightButton4 = document.querySelector(".products__arrowRigth4");

//Quinto slider(Testemonial)
const slider5 = document.querySelector(".testemonial__container");
const leftButton5=document.querySelector(".arrowTestemonialLeft");
const rightButton5=document.querySelector(".arrowTestemonialRigth")


function getScrollDistance() {
  const screenWidth = window.innerWidth; 
  
  if (screenWidth > 1024) {
    return 1600; // Para telas grandes

  } else if (screenWidth > 768) {
    return 500; // Para tablets

  } else {
    return 370; // Para celulares
  }
}


//Configura o slider para poder ser reaproveitado durante o código com uma função.
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

  // Inicializa os sliders.Esperando que todo o conteúdo da página,DOM, seja carregado.
document.addEventListener("DOMContentLoaded", () => {
    setupSlider(slider, leftButton, rightButton);
    setupSlider(slider2, leftButton2, rightButton2);
    setupSlider(slider3, leftButton3, rightButton3);
    setupSlider(slider4, leftButton4, rightButton4);
    setupSlider(slider5,leftButton5, rightButton5);  
  });


  //Feedback da quantidade de Scroll no console.
window.addEventListener("resize", () => {
  console.log(`Nova distância de scroll: ${getScrollDistance()}px`);
});


