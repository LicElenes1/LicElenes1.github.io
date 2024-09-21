<?php

    $aciertos = 0;
    $nombre = $_POST["nombre"];
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    echo "<b>El Examen fue creado por: Elenes Lafuente Santiago</b></br>";
    echo "<b>El Alumno que contesto el Examen fue: ".$nombre."</b>";

   
    echo "<h3>1. ¿Qué lenguaje de programación se utiliza comúnmente para dar estilo y diseño a las páginas web? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = CSS</h5>";
    if($pregunta1 == "CSS"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.webp' width='50px'><hr>";
    }

    echo "<h3>2. El lenguaje de programación _____________ se utiliza principalmente para definir el comportamiento de una página web.</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = JavaScript</h5>";
    if(strtoupper($pregunta2) == "JAVASCRIPT"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.webp' width='50px'><hr>";
    }

    echo "<h3>3. ¿Cuál de los siguientes lenguajes se usa principalmente para estructurar el contenido de una página web?</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta3." ---- Correcta = HTML</h5>";
    
    if($pregunta3 == "HTML"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.webp' width='50px'><hr>";
    }
    
   // <!--$p3_respuestas_correctas = 0;

   // if(count($pregunta3) == 2){
       // for($i=0; $i<count($pregunta3); $i++){
          //  if($pregunta3[$i] == "sql" || $pregunta3[$i] == "mongo"){
              //  $p3_respuestas_correctas ++;
          //  }
        //}
        //if($p3_respuestas_correctas == 2){
          //  $aciertos++;
          //  echo "<img src='correcta.png' width='50px'><hr>";
       // } else {
          //  echo "<img src='incorrecta.webp' width='50px'><hr>";
       // }
    //} else {
      //  echo "<img src='incorrecta.webp' width='50px'><hr>";
    //}


        echo "<h3>4. ¿Es la forma correcta de nombrar una variable en PHP?</h3>";
        echo "<h5>Repuesta seleccionada ".implode(" y ", $pregunta4)." ---- Correcta = Python y Php</h5>";
        $p4_respuestas_correctas = 0;
        
        if(count($pregunta4) == 2){
            for($i=0; $i<count($pregunta4); $i++){
                if($pregunta4[$i] == "PYTHON" || $pregunta4[$i] == "PHP"){
                    $p4_respuestas_correctas ++;
                }
            }
            if($p4_respuestas_correctas == 2){
                $aciertos++;
                echo "<img src='correcta.png' width='50px'><hr>";
            } else {
                echo "<img src='incorrecta.webp' width='50px'><hr>";
            }
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>5. ¿Qué es un commit en el contexto de GitHub?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = B) Un cambio guardado en el repositorio de código</h5>";
        if($pregunta5 == "B"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>6. ¿Qué significa bug en el contexto de programación?";
        echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = A) Un error en el código</h5>";
        if($pregunta6 == "A"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>7. ¿Cuál de los siguientes es un lenguaje de programación interpretado?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = C) Python</h5>";
        if($pregunta7 == "C"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>8. ¿Qué estructura de control se usa para hacer una elección?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = B) if</h5>";
        if($pregunta8 == "B"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>9. ¿Qué estructura de control se usa para hacer una elección?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = A) Imprime en la consola</h5>";
        if($pregunta9 == "A"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }

        echo "<h3>10. ¿Cuál es la función de la palabra clave return en una función?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = C) Devuelve un valor</h5>";
        if($pregunta10 == "C"){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.webp' width='50px'><hr>";
        }


        
    echo "</br>CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>