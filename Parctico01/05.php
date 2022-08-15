
<!-- Construir un programa que calcule el índice de masa corporal de una persona 
(IMC = peso [kg] / altura [m]2) e informe el estado en el que se encuentra esa persona en función del valor de IMC. -->


<form action="05.php" method="GET">
    <p>Peso: <input type="text" name="peso"></p>
    <p>Altura: <input type="text" name="altura"></p>
    <input type="submit" value="Enviar">
</form>

<?php
if(!empty($_GET["altura"]) && !empty($_GET["peso"])){

    
    
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];
    $imc = $peso / pow($altura, 2);
    $nivel = "";
   
    switch ($imc) {
        case $imc < 18.50:
            $nivel = "Bajo peso";
        break;
        case $imc > 18.50 && $imc < 24.99:
            $nivel = "Peso normal";
        break;
        case $imc >= 25.00:
            $nivel = "Sobrepeso";
        break;
        case $imc >= 30.00:
            $nivel = "Obesidada";
        break;
    }
    $imc = floor($imc);
    echo "<h3> su inidice de masa corporal es de $imc y su condicion es $nivel </h3>";


}


?>

