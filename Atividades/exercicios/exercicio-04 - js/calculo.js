function validar(campo) {

    let n = campo.value;

    if (n.lenght == 0 || isNaN(parseInt(n))) {
        window.alert("Informe o valor corretamente!@");
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;
}

function calcular() {

    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if (validar(n1) && validar(n2)) {
        let resultado = parseInt(n1.value) + parseInt(n2.value);
        document.dados.resultado.value = resultado;
    }

}

function validarDadosForm(campo) {

    let n = campo.value;

    if (isNaN(parseFloat(n)) && !isFinite(n)) {
        return true;
    }

    else{
        window.alert("Digite apenas letras!@")
        campo.value = "";
        campo.focus();
        return false;
    }
   


}

function carregarDadosDoForm() {
    let n1 = document.frmDados.nome;
    let e1 = document.frmDados.endereço;
    let ge1 = document.frmDados.genero;

    if (validarDadosForm(n1)){
        const pessoa = new Pessoa(n1.value, e1.value, ge1.value);
        console.log(pessoa);
        window.alert("Dados cadastrados com sucesso!\nNome: " + n1.value + "\nEndereço: " + e1.value + "\nGênero: " + ge1.value);
    }
    
}

function Pessoa(nome, endereço, genero, area) {

    this.nome = nome;
    this.endereço = endereço;
    this.genero = genero;
    this.area = area;

}