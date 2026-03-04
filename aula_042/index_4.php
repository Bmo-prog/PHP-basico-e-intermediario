<?php

$escola = [
    "Turma A" => ["Carlos", "Ana", "João"],
    "Turma B" => ["Mariana", "Pedro", "Lucas"],
    "Turma C" => ["Fernanda", "Rafael", "Juliana"]
];

foreach($escola as $turma=>$alunos) {
    echo "<h3><u>$turma</u></h3>";

    foreach ($alunos as $aluno) {
        if($aluno == "Pedro") break 2;
        echo "<p>$aluno</p>";     
    }

}

?>