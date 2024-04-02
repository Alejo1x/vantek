window.addEventListener("scroll", function(){
    var header= document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY>0);
 })


window.sr = ScrollReveal();

    sr.reveal('.dir', {
        duration: 3000,
        origin: 'bottom',
        distance: '-100px'
    });

   
