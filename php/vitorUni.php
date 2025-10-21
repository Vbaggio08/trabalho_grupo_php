<?php
    /*O código cria um array de pessoas, cada uma com nome e idade, percorre todos os elementos 
    exibindo seus nomes e idades, e ao mesmo tempo verifica quem é a pessoa mais velha e a mais nova.
    Ao final, imprime no navegador o nome e a idade da pessoa mais jovem e da mais velha.*/
    
    //Exemplo de array que armazena nomes e idades de pessoas e exibe todos os nomes e idades e ao final do codigo exibe quem é o mais velho e quem é o mais novo.
    $pessoas = [
        ["nome" => "Ana", "idade" => 28],
        ["nome" => "Bruno", "idade" => 34],
        ["nome" => "Carla", "idade" => 22],
        ["nome" => "Daniel", "idade" => 45],
        ["nome" => "Eva", "idade" => 19]
    ];

    // Inicializa as variáveis para armazenar a pessoa mais velha e a mais nova
    $maisVelho = $pessoas[0];
    $maisNovo = $pessoas[0];

    echo "<h1> Lista de Pessoas: </h1>\n";
    // Percorre o array de pessoas e exibe seus nomes e idades
    //foreach -- Estrutura de repetição que percorre todos os elementos de um array
    //$pessoa -- Variável temporária que recebe cada elemento do array $pessoas a cada iteração
    foreach ($pessoas as $pessoa) 
    {
        echo "Nome: " . $pessoa["nome"] . ", Idade: " . $pessoa["idade"] . " anos<br><br>";

        //Verifica se a idade da pessoa atual é maior que a da pessoa armazenada em $maisVelho
        //Se sim, atualiza $maisVelho com essa pessoa
        if ($pessoa["idade"] > $maisVelho["idade"]) 
        {
            $maisVelho = $pessoa;
        }

        //Verifica se a idade da pessoa atual é menor que a da pessoa armazenada em $maisNovo
        //Se sim, atualiza $maisNovo com essa pessoa
        if ($pessoa["idade"] < $maisNovo["idade"]) 
        {
            $maisNovo = $pessoa;
        }
    }
    //Exibe quem é a pessoa mais nova e mais velha com seus nomes e idades
    echo "<br>Pessoa mais nova: " . $maisNovo["nome"] . " (" . $maisNovo["idade"] . " anos)<br>";
    echo "<br>Pessoa mais velha: " . $maisVelho["nome"] . " (" . $maisVelho["idade"] . " anos)<br>";
    
?>