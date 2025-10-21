<?php
    /*Neste codigo criamos um  array multidimensional chamado $alunos, onde cada elemento 
    representa um aluno com seu nome e um array de notas por disciplina. 
    Em seguida, percorre cada aluno usando foreach, exibindo o nome e as notas de todas as disciplinas.
    */

    // Criamos um array multidimensional chamado $alunos
    // Cada elemento do array representa um aluno
    // Cada aluno é um array associativo com 'nome' e 'notas'
    $alunos = [
        [
            "nome" => "Ana", // Chave 'nome' armazena o nome do aluno

            "notas" => 
            [     // Chave 'notas' armazena outro array associativo com disciplinas e notas
                "Matemática" => 8,   
                "Português" => 7.5,  
                "História" => 9      
            ]
        ],

        [
            "nome" => "Bruno",

            "notas" => 
            [
                "Matemática" => 6.5,
                "Português" => 8,
                "História" => 7
            ]
        ],

        [
            "nome" => "Carla",

            "notas" => 
            [
                "Matemática" => 9,
                "Português" => 9.5,
                "História" => 10
            ]
        ]
    ];

    echo "<h1> Notas dos Alunos: </h1>\n";
    // Percorre cada aluno do array $alunos
    foreach ($alunos as $aluno) {

        // Exibe o nome do aluno
        echo "Aluno: " . $aluno["nome"] . "<br>";

        // Percorre o array de notas do aluno
        // $disciplina recebe a chave do array (nome da disciplina)
        // $nota recebe o valor correspondente (nota da disciplina)
        foreach ($aluno["notas"] as $disciplina => $nota) 
        {
            echo $disciplina . ": " . $nota . "<br>"; // Exibe a disciplina e a nota
        }
        echo "<br>"; 
        header("refresh:5; url=../multi.html");
    }
?>
