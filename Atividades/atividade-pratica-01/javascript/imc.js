function carregaDadosForm() {

    var peso = document.getElementById("peso").value;
    var altura = document.getElementById("altura").value;
    altura = altura / 100
    altura = parseFloat(altura);
    peso = parseFloat(peso);


    let imc = (peso / (altura * altura));

    var pesoMin = parseFloat(18.5 * altura * altura).toFixed(2);
    var pesoMax = parseFloat(21.9 * altura * altura).toFixed(2);

    imc = imc.toFixed(2);

    if (imc < '18.5') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Subnutrição';
        document.getElementById("pesoMi").innerHTML = pesoMin;
        document.getElementById("pesoMa").innerHTML = pesoMax;
    }

    if (imc >= '18.5' && imc <= '24.9') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Peso Saudável';
    }

    if (imc >= '25' && imc <= '29.9') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Sobrepeso';
        document.getElementById("pesoMi").innerHTML = pesoMin;
        document.getElementById("pesoMa").innerHTML = pesoMax;
    }

    if (imc >= '30' && imc <= '34.9') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Obesidade Grau I';
        document.getElementById("pesoMi").innerHTML = pesoMin;
        document.getElementById("pesoMa").innerHTML = pesoMax;
    }

    if (imc >= '35' && imc <= '39.9') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Obesidade Grau II';
        document.getElementById("pesoMi").innerHTML = pesoMin;
        document.getElementById("pesoMa").innerHTML = pesoMax;

    }

    if (imc >= '40') {
        document.getElementById("result").innerHTML = imc;
        document.getElementById("resultmsg").innerHTML = 'Obesidade Grau III';
        document.getElementById("pesoMi").innerHTML = pesoMin;
        document.getElementById("pesoMa").innerHTML = pesoMax;
    }



}