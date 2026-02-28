<?php

    // ARRAYS
    
    // Como podemos adicionar e remover valores?

    $nomes = ["joao", "ana", "carlos"];

    // adicionar (push)
    $nomes[] = "novo nome";
    // $nomes = ["joao", "ana", "carlos", "novo nome"];
    print_r($nomes[3]);
    // ou
    array_push($nomes, "pedro");
    array_push($nomes, "rui", "carla", "marta");

    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // remover elemento (a chave vai desaparecer)
    unset($nomes[5]);
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';

    // existem dezenas de funções para operar arrays

    $nomes = ["fernando", "felipe", "joao", "pedro", "paulo"];

    print_r($nomes);

    unset($nomes[2]);
    
    echo"array completo";

    print_r($nomes);

    print_r($nomes[3]);



