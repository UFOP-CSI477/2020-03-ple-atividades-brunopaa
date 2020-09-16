function botao( num ){
    
    
    var linha = document.calc.visor.value
    document.calc.visor.value=linha+ num;



}

function calcula(){

    var linha= document.calc.visor.value;
    var resultado = eval (linha);
    document.calc.visor.value=resultado.toLocaleString('pt-Br');

}



function reset(){

    document.calc.visor.value='';

}