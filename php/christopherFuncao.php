<?php
    //Números já definidos.
    $num1 = 30;
    $num2 = 4;

    //Função que soma dois números.
    function soma($num1, $num2){
         return $num1 + $num2;
        //Retorna soma dos números.
    }
    function subtrai($num1, $num2){
        return $num1 - $num2;
    }
    function multiplica($num1, $num2){
        return $num1 * $num2;
    }
    function divide($num1, $num2){
        return $num1 / $num2;

    }
    
    //Mostra resultado das operações.
    echo "<h3>Resultados das Operações:</h3>";
    echo "Números predefinidos: 30 e 4 <br><br>";
    echo " 30 + 4 = " . soma($num1, $num2) . "<br>";
    echo " 30 - 4 = " . subtrai($num1, $num2) . "<br>";
    echo " 30 * 4 = " . multiplica($num1, $num2) . "<br>";
    echo " 30 / 4 = " . divide($num1, $num2) . "<br>";
    header("refresh:10; url=../funcao.html");



?>