<?php

$erro = 'ERRO';

$css = '';
$mensagem = null;

if(!empty($erro)) {
    $css = 'erro';
    $mensagem = $erro;
} else {
    $css = 'sucesso';
    $mensagem = 'SUCESSO';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
            padding: 10px;
        }
        .erro {
            color: white;
            background-color: darkred;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="<?php echo $css; ?>">
    <?php echo $mensagem; ?>
</div>

</body>
</html>