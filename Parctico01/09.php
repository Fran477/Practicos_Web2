<div class = "main">
<link rel="stylesheet" href="style.css">
<form action="09.php" method="GET">
    <p>Ingresar Numero: <input type="text" name="num"></p>
    <input type="submit" value="Enviar">
</form>


<?php
if(!empty($_GET['num']) && is_numeric($_GET['num'])){
    $num = $_GET['num'];
}
else{
    $num = 20;
}

echo "<table>";

for ($i=0; $i < $num + 1; $i++) {
    echo "<tr>";
    if($i == 0){
        echo "<td>  </td>"; 
    }
    else{
    echo "<th> $i </th>";
    }
    for ($j=1; $j < $num + 1 ; $j++) { 
        $r = $i * $j;
        if($i == 0){
            echo "<th> $j </th>";  
        }
        else if($i == $j){
            echo "<th> $r </th>"; 
        }
        else{
            echo "<td> $r </td>";
        }
    }
    echo "</tr>";
    
}
echo "</table>";

?>
</div>