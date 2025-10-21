<?php
    // exemplo de funcao para mostrar numeros dentro do vetor
    
    $libera = 1;
    //o $libera controla a execucao da funcao mostrador
    $numeros=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    //aqui e salvo os numeros para realizar o teste.

    function mostrador(){
       global $numeros;
        echo "Mostrando os numeros dentro do vetor: <br>";
        //percorre o vetor numeros
        $test = 20;
        for ($i = 0; $i <= $test; $i++) {
            
                echo $numeros[$i] . "<br>";
            
        }
        finalmensagem();
    }
    function finalmensagem(){
        echo "Mostramos todos os numeros pares, Ate a proxima <br>";
    }

    if ($libera === 1){
        mostrador();
        header("refresh:5; url=../uni.html");
    }



?>