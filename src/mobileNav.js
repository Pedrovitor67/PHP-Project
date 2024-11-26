const mobileNav = () =>{
    const barsButton= document.querySelector('.header__bars');
    const mobileNav=document.querySelector('.mobile-nav');
    const mobileNavLinks=document.querySelectorAll('.mobile-nav__link');

    let isMobileNavOpen= false; //Lembrando de usar LET, pois esse valor vai mudar.

    barsButton.addEventListener('click', () => {
    isMobileNavOpen=!isMobileNavOpen; //Perceba que esse valor so se torna verdadeiro SE o menu for aberto
    
    if(isMobileNavOpen){
        mobileNav.style.display ='flex';
        document.body.style.overflowY='hidden';
    }
    else{
        mobileNav.style.display='none';
        document.body.style.overflowY='auto';
    }

})
    mobileNavLinks.forEach((navlinks) =>{
        navlinks.addEventListener('click',() =>{
            isMobileNavOpen=false; //Bug de clicar duas vezes
            document.body.style.overflowY='auto'
            mobileNav.style.display='none'
        })
    })

}

export default mobileNav;


