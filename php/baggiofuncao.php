<?php

    $libera = 1;
    //essa variavel controla a execucao da funcao contador
    function contador(){
        echo "Contando ate 10: <br>";
        for($i=1; $i<=10; $i++){
            echo $i . "<br>";
        }
        //chaama a funcao mensagem apos o termino da contagem
        mensagem();
    }
    // imprime uma mensagem padrao 
    function mensagem(){
        echo "fizemos a contagem, Até a proxima <br>";
    }

    if ($libera === 1){
        // quando entra aqui chama a funcao contador
        contador();
        header("refresh:5; url=../funcao.html");
    }
   
?>