function calcular() {

    document.getElementById('retorno').style.display = "flex";

    var altura = document.getElementById("altura").value.replace(",", ".");
    var peso = document.getElementById("peso").value.replace(",", ".");

    var imc = peso / (altura * altura);

    var res = document.getElementById("res");
    var situacao = document.getElementById("situacao");


    //Valida se os campos estão vazios ou inseriu numeros

    if ((altura == "" || peso == "") || (isNaN(altura) || isNaN(peso)) || altura <= 0 || peso <= 1) {
        res.innerHTML = "<h1>Ops!</h1>";
        situacao.innerHTML = " <h1>Revise os dados inseridos</h1>";

    } else {

        // Faz o comparativo e retorna os resultados

        res.innerHTML = "<h4> Seu IMC:</h4> <h1>" + (imc).toFixed(1) + "</h1>";

        if (imc < 18.5) {
            situacao.innerHTML = " <h1> baixo peso </h1>";
            document.getElementById('result').classList.add('baixo');

        } else {
            if (imc <= 25) {
                situacao.innerHTML = " <h1> peso ideal </h1>";
                document.getElementById('result').classList.add('normal');

            } else {
                if (imc <= 30) {
                    situacao.innerHTML = "<h1> sobrepeso </h1>";
                    document.getElementById('result').classList.add('sobrepeso');
                } else {
                    if (imc <= 35) {
                        situacao.innerHTML = " <h1 style> obesidade GRAU 1 </h1>";
                        document.getElementById('result').classList.add('obesidade1');

                    } else {
                        if (imc <= 40) {
                            situacao.innerHTML = " <h1 style>obesidade GRAU 2 </h1>";
                            document.getElementById('result').classList.add('obesidade2');

                        } else {
                            situacao.innerHTML = " <h1 style>obesidade GRAU 3 </h1>";
                            document.getElementById('result').classList.add('obesidade3');
                        }

                    }
                }

            }
        }
    }

}