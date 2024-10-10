$(document).ready(function (){
    $("dar_carta").click(function(){
        var b = true;
        var cont = 0;
        while(b){
            var num = Math.floor(Math.random()*54) +1;
            if(cartas[b-1] == true){
                continue;
            } else {
                $("#carta_activa").html("<img src='imagenes/"+num+".jpg'>")
                cartas[b-1] = true;
                b=false;
                cont++;
            }
            if(cont == 54){
                console.log("Ya se dieron todas las cartas");
                b=false;
            }
        }
    })
});
//PROFE LA ANDREA SALAS BELTRAN ME ESTA ROBANDO EL CODIGO