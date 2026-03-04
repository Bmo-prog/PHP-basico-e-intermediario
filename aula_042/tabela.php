<?php

$escola = [
    "Turma A" => ["Carlos", "Júlia", "João"],
    "Turma B" => ["Mariana", "Pedro", "Lucas"],
    "Turma C" => ["Fernanda", "Rafael", "Juliana"]
];

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela Escola</title>
</head>

    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            padding: 30px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        th {
            background-color: #2c3e50;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

    </style>
<body>

    <h2>Lista de Turmas e Alunos</h2>

    <table>
        <tr>
            <th>Turma</th>
            <th>Aluno</th>
        </tr>

        <?php foreach($escola as $turma => $alunos): ?>

            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?php echo $turma; ?></td>
                    <td><?php echo $aluno; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>