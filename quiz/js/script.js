for(let opcoes of document.getElementsByClassName("q1")){
    opcoes.onclick = function() {troca('questao1', 'questao2')}
}
for(let opcoes of document.getElementsByClassName("q2")){
    opcoes.onclick = function() {troca('questao2', 'questao3')}
}
for(let opcoes of document.getElementsByClassName("q3")){
    opcoes.onclick = function() {troca('questao3', 'questao4')}
}
for(let opcoes of document.getElementsByClassName("q4")){
    opcoes.onclick = function() {troca('questao4', 'questao5')}
}
for(let opcoes of document.getElementsByClassName("q5")){
    opcoes.onclick = function() {troca('questao5', 'questao6')}
}
for(let opcoes of document.getElementsByClassName("q6")){
    opcoes.onclick = function() {troca('questao6', 'questao7')}
}
for(let opcoes of document.getElementsByClassName("q7")){
    opcoes.onclick = function() {troca('questao7', 'questao8')}
}
for(let opcoes of document.getElementsByClassName("q8")){
    opcoes.onclick = function() {calcular('calcular')}
}

const troca = (esconde, mostra) =>{
    document.getElementById(esconde).style.display="none";
    document.getElementById(mostra).style.display="";
}
const calcular = (mostra) =>{
    document.getElementById(mostra).style.display="flex";
}
