//Rola para a seção correspondente ao clique no menu
const mover = (medida) => {
    var rolagem = medida * 665;
    window.scrollTo({
        left: 0,
        top: rolagem,
        behavior: 'smooth'
    });
    if (screen.width < 769) {
        document.getElementById("menus").style.display="none";
        document.getElementById('close_menu').style.display="none";
    }
    
}

//Esconde a barra de menu ao rolar
/*
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("barra_menus").style.top = "0";
    } else {
        document.getElementById("barra_menus").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
}
*/

// Debounce do Lodash, evita repeticoes exageradas de eventos
const debounce = function (func, wait, immediate) {
    let timeout;
    return function (...args) {
        const context = this;
        const later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

//Animacao
const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function (element) {
        if ((windowTop) > element.offsetTop) {
            element.classList.add(animationClass);
        } else {
            element.classList.remove(animationClass);
        }
    })
}

animeScroll();

if (target.length) {
    window.addEventListener('scroll', debounce(function () {
        animeScroll();
    }, 0));
}

//Abre e fecha a galeria

const abre = (mostra) => {
    var botao = document.getElementById('close');
    var galeria = document.querySelector('.galeria');

    document.getElementById('galeria').style.display = "flex";
    document.getElementById(mostra).style.display = "flex";
    document.querySelector('body').style.overflow = "hidden";
//fecha
    botao.addEventListener("click", function () {
        galeria.style.display = "none";
        document.getElementById(mostra).style.display="none";
        document.querySelector('body').style.overflow = "";
        
    })
}

//Eventos no form de contato
var continuar = document.getElementById('btnform');
var el = document.querySelectorAll('.inputs');
var form = document.querySelector('form');
const showForm = () =>{
    continuar.style.display="none";
    for (var i = 0; i < el.length; i++) {
        el[i].style.display="flex";
        el[i].classList.add('animate__animated','animate__slideInRight');
    }
    form.classList.add("form_ativo");
}

//Abre e fecha menu nobile
var btn_open = document.querySelector('#open_menu');
var btn_close = document.getElementById('close_menu');
var menu = document.getElementById('menus');

btn_close.style.display="none";

btn_open.addEventListener("click", () =>{
    menu.style.display="flex";
    menu.classList.add('animate__animated','animate__fadeInDown');
    btn_close.style.display="flex";
})

btn_close.addEventListener("click", () =>{
    menu.style.display="none";
    btn_close.style.display="none";
})