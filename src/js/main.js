AOS.init();

window.document.addEventListener('DOMContentLoaded',function(){
    swiper();
    fixedNavbar();
    toggleMenu();
});

//Carrousel imagenes del header
function swiper(){

let swiper = new Swiper('.mySwiper', {
    effect: 'fade',
    loop: true,
        autoplay: {
            delay: 8500,
            disableOnInteraction: false,
        },
    });
}

//Fijar barra de navegacion al hacer scroll

function fixedNavbar(){
    const nav = document.querySelector('#navbar');
    const header = document.querySelector('.header');
    const body = document.querySelector('body');

    document.addEventListener('scroll', ()=>{
        if(header.getBoundingClientRect().bottom < 100){
            nav.classList.add('fixed')
            body.classList.add('body-scroll')
        }else{
            nav.classList.remove('fixed');
            body.classList.remove('body-scroll')
        }
    })
}

//Menu mobile
function toggleMenu() {
    const menu = document.querySelector('#navMenu');
    const button = document.querySelector('#mobileButton');
    const body = document.querySelector('body');
    const icono = document.querySelector('#mobileButton > i');

    let span = null;
    let isOpen = false;

    const openMenu = () => {
        menu.classList.add('show');
        icono.classList.add('fa-xmark');
        icono.classList.remove('fa-bars'); // o el ícono original
        isOpen = true;

        // Crear y agregar overlay
        span = document.createElement('span');
        span.classList.add('bodySpan');
        body.appendChild(span);

        span.addEventListener('click', closeMenu);
    };

    const closeMenu = () => {
        menu.classList.remove('show');
        icono.classList.remove('fa-xmark');
        icono.classList.add('fa-bars'); // o el ícono original
        isOpen = false;

        if (span && body.contains(span)) {
            span.removeEventListener('click', closeMenu);
            body.removeChild(span);
            span = null;
        }
    };

    button.addEventListener('click', () => {
        if (!isOpen) {
            openMenu();
        } else {
            closeMenu();
        }
    });
}

