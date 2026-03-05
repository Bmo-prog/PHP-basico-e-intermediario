<?php

// FUNÇÕES

/* 

As funções são blocos de código reutilizáveis que apenas são executados
quando são "chamados" pelo nosso código.
O PHP contém um vasto conjunto de funções já disponíveis.

function nome_da_funcao(parâmetros){
    # código
}

Uma função pode ter no seu interior qualquer tipo de código de PHP,
inclusive outras funções.
*/

// definir uma função
function apresentar(){
    echo 'Estou dentro de uma função de PHP.';
}

// chamar a execução de uma função.
echo "Estou fora da função";
echo "<br>";
apresentar();

