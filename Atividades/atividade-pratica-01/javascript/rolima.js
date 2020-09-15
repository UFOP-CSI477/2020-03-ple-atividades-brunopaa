function carregaDadosForm() {

    let tempo = [document.frmDados.tempo1.value, document.frmDados.tempo2.value, document.frmDados.tempo3.value, document.frmDados.tempo4.value, document.frmDados.tempo5.value, document.frmDados.tempo6.value];
    let nome = [document.frmDados.nome1.value, document.frmDados.nome2.value, document.frmDados.nome3.value, document.frmDados.nome4.value, document.frmDados.nome5.value, document.frmDados.nome6.value];
    let posicao = [document.frmDados.posicao1.value, document.frmDados.posicao2.value, document.frmDados.posicao3.value, document.frmDados.posicao4.value, document.frmDados.posicao5.value, document.frmDados.posicao6.value];
    let parada = 0;
    var aux = 0;
    var contador = 0;


    tempo = tempo.filter(function (v) { return v !== '' });
    nome = nome.filter(function (v) { return v !== '' });
    posicao = posicao.filter(function (v) { return v !== '' });


    var menor = Math.min.apply(null, tempo);

    aux = tempo.filter(x => x == menor).length;


    for (var i = 0; i < aux; i++) {
        console.log(tempo[i]);

        document.getElementById("resultR" + i).innerHTML = 'Vencedor!';
        document.getElementById("chegadaR" + i).innerHTML = 1;
        contador += 1;


    }



    while (parada < tempo.length) {

        for (var i = 0; i < tempo.length; i++) {

            var x = Math.min.apply(null, tempo);
            var dexof = tempo.indexOf("" + x);


            if (x == tempo[dexof] && tempo[dexof] < 9999) {

                var n = nome[dexof];
                var t = tempo[dexof];
                var p = posicao[dexof];

                document.getElementById("nomeR" + i).innerHTML = n;
                document.getElementById("tempoR" + i).innerHTML = t;
                document.getElementById("largadaR" + i).innerHTML = p;

                if (document.getElementById("resultR" + i).value != 'Vencedor!') {
                    document.getElementById("chegadaR" + contador).innerHTML = contador + 1;
                    contador++;

                }

                parada++;
                tempo[dexof] = '9999';




            }




        }

    }

}














