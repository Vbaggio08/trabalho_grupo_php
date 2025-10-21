<?php
    $libera = 1;
    //essa variavel controla a execucao da funcao mostrador
    $matriz_notas = [
        [7.5, 8.0, 9.0],  // Notas do Aluno 1
        [6.0, 7.0, 8.5],  // Notas do Aluno 2
        [9.5, 9.0, 10.0] // Notas do Aluno 3
    ];

    function calculo_media(){
        global $matriz_notas; // Acessa a matriz de notas definida fora da função
        echo "Mostrando a nota dos alunos: <br>";
        //for para percorrer a matriz
       for($i=0; $i <=2; $i++)
       {
            echo "<br>Aluno "  . $i+1 . ": ";
            //for para percorrer as notas de cada aluno
            for($j=0; $j <=2; $j++)
            {
                echo "<br>nota: " . $i+1 .": ". $matriz_notas[$i][$j];
            }
            echo "<br><br>";
       }
        finalmensagem();
        // chama a mensagem padrao
    }
    function finalmensagem(){
        echo "Mostramos todas as notas, Ate a proxima <br>";
    }
    if ($libera === 1){
        calculo_media();
        header("refresh:15; url=../funcao.html");
    }


?>