<?php
//Criação do array com a função carros e modelo
$array = [
    ["HB20", "Creta", "Tucson"],
    ["Supra", "Corolla", "Hilux"],
    ["Civic", "Accord", "Fit"],
    ["Ranger", "Mustang", "Fusion"],
    ["Duster", "Kwid", "Kardian"]
];

$marca = ["Hyundai", "Toyota", "Honda", "Ford", "Renault"];

echo "<h3>Lista de Carros por Marca:</h3>";
    for($i = 0 ; $i <= 4; $i++){
        echo "<br>".$marca[$i]. ":" . "<br>";
        for($j = 0; $j <= 2; $j++){
            echo "-- " . $array[$i][$j] . "<br>";
        }
    }


?>