<?php
//Criação do array com a função carros.
$array = ["Hyundai", "Toyota", "Honda", "Ford", "Renault"];

//função que exibe os carros do array.
function carros($array){
    echo "<h3>Lista de Carros:</h3>";
    //foreach para percorrer o array e exibir os carros.
    //'as $carro' é a variável que recebe cada valor do array.
    //Dentro do bloco {}, você pode usar $carro para acessar o valor do elemento atual.
    foreach($array as $carro){
        echo "- " . $carro . "<br>";
    }

    header("refresh:10; url=../christopherUni.html");
}

//Chama a função carros.
    carros($array);

?>