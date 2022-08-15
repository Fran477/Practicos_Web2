<!-- Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el tamaño de la lista generada. -->
<h1>Practico 04</h1>
   
<ul>
<li><a href="04.php?cont=5">ver los primeros 5</a></li>
<li><a href="04.php?cont=20">ver los primeros 20</a></li>
<li><a href="04.php?cont=100">ver los primeros 100</a></li>
<li><a href="04.php?cont=200">ver TODOS</a></li>
</ul>

<?php

if(!empty($_GET)){
echo ("<ul>");
for($i = 1; $i < $_GET["cont"] + 1; $i++){
    echo("<li>Item: $i </li>");
}
echo "</ul>";
}

?>


