<?php

/* 
1. Constrói um array com todos os resultados da tabuada dos 327.
2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
*/

$resultados = [];
for($i = 1; $i <= 10; $i++){
    $resultados[] = 327 * $i;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>

    <style>
        /* Remove margem padrão do navegador */
        body {
            margin: 0;

            /* Altura total da tela (100% da viewport) */
            height: 100vh;

            /* Ativa o modo flexbox */
            display: flex;

            /* Centraliza horizontalmente */
            justify-content: center;

            /* Centraliza verticalmente */
            align-items: center;

            /* Cor de fundo da página */
            background-color: #f4f4f4;

            /* Define a fonte do texto */
            font-family: Arial, Helvetica, sans-serif;
        }


        /* Estilização da tabela */
        table {

            /* Remove espaço entre bordas das células */
            border-collapse: collapse;

            /* Define largura fixa da tabela */
            width: 300px;

            /* Cor de fundo da tabela */
            background: white;

            /* Centraliza o texto dentro das células */
            text-align: center;

            /* Sombra para dar efeito moderno */
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }


        /* Estilização do cabeçalho da tabela */
        th {

            /* Cor de fundo escura */
            background: #333;

            /* Cor do texto */
            color: white;

            /* Espaçamento interno (respiro dentro da célula) */
            padding: 10px;
        }


        /* Estilização das células da tabela */
        td {

            /* Espaçamento interno */
            padding: 12px;

            /* Linha separando as linhas da tabela */
            border-bottom: 1px solid #ddd;
        }


        /* Efeito quando passa o mouse na linha */
        tr:hover {

            /* Muda a cor de fundo ao passar o mouse */
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

<table>
    <tr>
        <th>Tabuada do 327</th>
    </tr>

    <?php foreach($resultados as $resultado): ?>
        <tr>
            <td><?= $resultado ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>