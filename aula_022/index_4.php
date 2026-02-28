<?php

    // ARRAYS

    $empresa = [
        'ceo' => "joao",
        'administrador' => "ana",
        'executivo' => "carlos",
        'contabilista' => "cristina"
    ];

    echo '<pre>';
    print_r($empresa);
    echo '</pre>';

    // para apresentar um valor, usamos a key
    echo $empresa['contabilista'];

    // podemos adicionar mais valores
    $empresa["operario"] = "antonio";
    echo '<pre>';
    print_r($empresa);
    echo '</pre>';
