<!-- Una persona desea invertir dinero en un banco, 
l cual le otorga un % de interés mensual. 
Escribir un programa para simular la inversión que imprima cuál será la cantidad de 
dinero que esta persona tendrá mes a mes durante un año. 
Genere una tabla HTML para mostrar el resultado. -->
<div class = "main">
<link rel="stylesheet" href="styleinteres.css">
<form action="07.php" method="GET">
    <p>Ingresar Dinero: <input type="text" name="dinero"></p>
    <input type="submit" value="Enviar">
</form>
<h1>Un Interes del 15%</h1>


<?php
if(!empty($_GET["dinero"])){
    $dinero = $_GET["dinero"];
}
else{
    $dinero = 1000;
}

$mes = 1;
$interes = 0;


echo "<table>";
while($mes <= 12){
    echo "<tr>";
    switch ($mes) {
        case 1:
            $interes = $dinero * 1.15;
            echo "<th>Enero</th>" . "<td>$$interes</td>";
        break;
        case 2:
            $interes = $interes * 1.15;
            echo "<th>Febrero</th>";
            echo "<td>$$interes</td>";
        break;
        case 3:
            $interes = $interes * 1.15;
            echo "<th>Marzo</th>";
            echo "<td>$$interes</td>";
        break;
        case 4:
            $interes = $interes * 1.15;
            echo "<th>Abril</th>";
            echo "<td>$$interes</td>";
        break;
        case 5:
            $interes = $interes * 1.15;
            echo "<th>Mayo</th>";
            echo "<td>$$interes</td>";
        break;
        case 6:
            $interes = $interes * 1.15;
            echo "<th>Junio</th>";
            echo "<td>$$interes</td>";
        break;
        case 7:
            $interes = $interes * 1.15;
            echo "<th>Julio</th>";
            echo "<td>$$interes</td>";
        break;
        case 8:
            $interes = $interes * 1.15;
            echo "<th>Agosto</th>";
            echo "<td>$$interes</td>";
        break;
        case 9:
            $interes = $interes * 1.15;
            echo "<th>Septiembre</th>";
            echo "<td>$$interes</td>";
        break;
        case 10:
            $interes = $interes * 1.15;
            echo "<th>Octubre</th>";
            echo "<td>$$interes</td>";
        break;
        case 11:
            $interes = $interes * 1.15;
            echo "<th>Noviembre</th>";
            echo "<td>$$interes</td>";
        break;
        case 12:
            $interes = $interes * 1.15;
            echo "<th>Diciembre</th>";
            echo "<td>$$interes</td>";
        break;
    }
    echo "</tr>";
    $mes++;

}
echo "</table>";


 ?>