<?php
    /*Nesse codigo definimos uma função chamada data_de_hoje(), que usa getdate() para obter as informações da data atual
    e identifica o número do dia da semana. Com um switch, ele compara esse número e retorna o nome correspondente 
    do dia (domingo, segunda, etc.). Depois, a função é chamada e o resultado é exibido na tela com echo, mostrando o dia atual.*/

    //Declarandoa a função
    function data_de_hoje() 
    {
        //A função getdate() fornece informações detalhadas da data atual
        $hoje = getdate();

        //Usando switch para verificar qual dia da semana
        //"wday" Retorna o número do dia da semana:
        /* 1 = Domingo
           2 = Segunda-feira
           3 = Terça-feira
           4 = Quarta-feira
           5 = Quinta-feira
           6 = Sexta-feira
           7 = Sábado
        */
        switch($hoje["wday"])
        {
            case 1:
                return "Hoje é domingo";
            break;
                
            case 2:
                return "Hoje é segunda-feira";
            break;

            case 3:
                return "Hoje é terça-feira";
            break;
                
            case 4:
                return "Hoje é quarta-feira";
            break;

            case 5:
                return "Hoje é quinta-feira";
            break;

            case 6:
                return "Hoje é sexta-feira";
            break;

            case 7:
                return "Hoje é sábado";
            break;
        }
    }
    
    //($dia) Cria uma variável para armazenar o retorno da função
    //data_de_hoje() Chama a função
    //O valor retornado pelo return da função é armazenado em $dia
    $dia = data_de_hoje();
    //Exibe o valor armazenado em $dia
    echo $dia;
    header("refresh:10; url=../funcao.html");
?>