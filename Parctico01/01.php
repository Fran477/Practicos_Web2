
<!-- Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. 
Identifique las diferencias entre arreglos asociativos e indexados -->

<h1>Ejercicio 01</h1>

<?php
    echo ("<ul>");
    for($i = 1; $i < 21; $i++){
        echo("<li> $i </li>");
    }
    echo "</ul>";
    
    echo ("<ul>");
    $array = [1,2,3,4,5,6,7,8,9,10];

    foreach($array as $num){
        echo("<li> $num </li>");
    }
    echo "</ul>";

    var_dump($_GET)

?>