function carregaDadosForm(){
    
    var a = document.getElementById("a").value;
    var delta = document.getElementById("delta").value;
    
    var mag = Math.log10(a) + (3*Math.log10(8*delta)) - 2.92;


    if (mag < '3.5') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = 'Geralmente não sentido, mas gravado.';
    }

    if (mag >= '3.5' && mag <= '5.4') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = "Às vezes sentido, mas raramente causa danos";
    }

    if (mag >= '5.5' && mag <= '6.0') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = 'Pode causar danos importantes em edifícios mal concebidos e em zonas restritas. Provoca apenas danos ligeiros em edifícios bem construídos.';
   
    }

    if (mag >= '6.1' && mag <= '6.9') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = 'Pode ser destruidor em áreas habitadas num raio de até 100 quilómetros em torno do epicentro.';
   
    }

    if (mag >= '7.0' && mag <= '7.9') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = 'Grande Terremoto. Pode causar sérios danos numa grande faixa.';


    }

    if (mag >= '8.0') {
        document.getElementById("result").innerHTML = mag;
        document.getElementById("resultmsg").innerHTML = 'Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.';
     
    }




















}