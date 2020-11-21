//Rola para a seção correspondente ao clique no menu
const mover = (medida) => {
    var rolagem = medida * 665;
    window.scrollTo({
        left: 0,
        top: rolagem,
        behavior: 'smooth'
    });
}

//Esconde a barra de menu ao rolar
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
    const windowTop = window.pageYOffset + ((window.innerHeight * 4) / 4);
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
    }, 200));
}

//Abre e fecha a galeria

const abre = (mostra) => {
    var botao = document.getElementById('close');
    var galeria = document.querySelector('.galeria');

    document.getElementById('galeria').style.display = "flex";
    document.getElementById(mostra).style.display = "flex";
    document.querySelector('body').style.overflow = "hidden";

    botao.addEventListener("click", function () {
        galeria.style.display = "none";
        document.getElementById(mostra).style.display="none";
        document.querySelector('body').style.overflow = "";
    })
}