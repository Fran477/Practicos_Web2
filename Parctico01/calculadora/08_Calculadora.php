
<?php
require_once ("08_Calculadora.html");

$operacion = $_GET["operacion"];
$r = 0;

if(!is_numeric($_REQUEST["num1"]) OR !is_numeric($_REQUEST["num2"])){
   echo "<h1 class=r>ERROR NO SE AGREGARON DATOS NUMERICOS</h1>";
   die();
}

$num_1 = $_GET["num1"];
$num_2 = $_GET["num2"];

if(!empty($_GET["num1"] && $_GET["num2"])){
    switch ($operacion) {
            case 'sumar':
                    $r = $num_1 + $num_2;
            break;

            case 'restar':
                $r = $num_1 - $num_2;
            break;

            case 'multiplicar':
                $r = $num_1 * $num_2;
            break;

            case 'dividir':
                $r = $num_1 / $num_2;
            break;

        }
    }

    echo "<h1 class=r>El resutado de la operacion es: $r </h1>"

?>