
<?php
    if(empty($_POST)){

        echo "<h1> Completar los campos </h1>";

    }
    else if(empty($_POST["name"]) || $_POST["apellido"] == "" || $_POST["edad"] == ""){
        
        echo "<h1> Completar todos los campos porfavor </h1>";
        
    }
    else{
        echo "<h3> Hola " . $_POST["name"] . " " . $_POST["apellido"] . " su edad es " . $_POST["edad"] . "</h3>";
    }

    echo "<a href=03.html> Volver </a>";
    
?>