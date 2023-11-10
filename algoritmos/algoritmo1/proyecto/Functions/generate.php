<?php
//llamar a la clase main encargada de generar las placas
require (__DIR__."/../Classes/main.php");
//instanciar la clase para pode acceder a sus metodos
$generatePlacas = new main();


$provincia = isset($_GET['provincia']) && !empty($_GET['provincia']);
$type = isset($_GET['type']) && !empty($_GET['type']);

//validar que existan los datos 

if($provincia && $type){
    //acceder al metodo de generacion de placas
    $generate = $generatePlacas->generatePlacas($_GET['provincia'], $_GET['type']);
    echo "Las placas son: " . $generate;
    echo '    <a href="../../../../algoritmos/algoritmo1/proyecto">Volver atras</a>';
}else{
    echo 'completa el formulario para generar una placa de vehiculo' . '<br>';
    echo '    <a href="../../../../algoritmos/algoritmo1/proyecto">Volver atras</a>';
}