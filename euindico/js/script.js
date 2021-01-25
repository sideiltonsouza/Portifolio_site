var btn_indicar = document.querySelector('#btn_quero_indicar');
var secao1 = document.querySelector("#home");
var secao2 = document.querySelector("#secao");
var bgRight = document.querySelector("#bg_right");
var btnContinuar = document.querySelector("#continuar");
var divMsg = document.querySelector("#cont_mensagem");
var btnEnviar = document.querySelector("#btnEnviar");


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


//Mascaras de telefone, RA e CPF
function maskTel(o, f) {
    setTimeout(function () {
        var v = mphone(o.value);
        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}

function maskCpf(o, f) {
    setTimeout(function () {
        var v = mcpf(o.value);
        if (v != o.value) {
            o.value = v;
        }
    }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "$1");
    }
    return r;
}

function mcpf(v) {
    var r = v.replace(/\D/g, "");
    //r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, "$1.$2.$3-$4");
    } else if (r.length > 5) {
        r = r.replace(/^(\d{2})(\d{1,5})(\d{1,3}).*/, "$1 $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d{3})(\d{0,5})/, "$1.$2");
    } else {
        r = r.replace(/^(\d*)/, "$1");
    }
    return r;
}

//Muda BG das secoes
btn_indicar.addEventListener("click", () => {
    secao1.style.display = "none";
    secao2.style.display = "";
    secao2.classList.add("reverse");
    bgRight.classList.add("aluno");
})

//manipula e valida o form
btnContinuar.addEventListener("click", () => {

    var nome = document.querySelector("#nome_aluno").value;
    var raCpf = document.querySelector("#ra_cpf").value;

    if (((nome.indexOf(" ") != -1 && nome.length > 4) && (raCpf != "") && (isNaN(nome))) && ((raCpf.length == 10 || raCpf.length == 11) || (raCpf.length == 14))) {
        document.getElementById("dados_aluno").style.display = "none";
        document.getElementById("dados_indicado").style.display = "";
        document.querySelector("#dados_aluno").style.display = "none";
        bgRight.classList.remove("aluno");
        bgRight.classList.add("indicado");
        document.getElementById("btnEnviar").style.display = "";
    } else {
        if (nome.indexOf(" ") == -1) {
            document.querySelector("#txt").innerHTML = "Ops! Digite seu nome e sobrenome, por favor ;).";
        } else {
            document.querySelector("#txt").innerHTML = "Ops! parece que você digitou algo errado. Dê uma revisada no RA ou CPF ;).";
        }
        divMsg.style.display = "";
    }
})

btnEnviar.addEventListener("click", () => {

    var indicado1 = document.querySelector("#indicado1").value;
    var telIndicado1 = document.querySelector("#tel_indicado1").value;

    if (indicado1.length < 4 || telIndicado1 < 14) {
        document.querySelector("#txt").innerHTML = "Ops! parece que você digitou algo errado. Dê uma revisada nos dados inseridos.";
        divMsg.style.display = "";
    }
})

//Esconde a div de mensagem de erro

var closeMsg = document.querySelector("#btn_close");

divMsg.addEventListener("click", () => {
    divMsg.style.display = "none";
});
closeMsg.addEventListener("click", () => {
    divMsg.style.display = "none";
});

//Permite apenas letras no form
function letras(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;

    // Verifica se é numero digitado
    // 48 é o 0
    // 57 é o 9
    if (charCode >= 48 && charCode <= 57) {
        return false;
    }
}