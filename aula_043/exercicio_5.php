<?php

$frase = "Esta frase vai aparecer com diferentes opacidades.";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Opacidade</title>
</head>
<body>

<?php for($i = 0; $i < 10; $i++): 

    $opacidade = 1 - ($i * 0.1);
?>

    <h3 style="opacity: <?= $opacidade ?>;">
        <?= $frase ?>
    </h3>

<?php endfor; ?>

</body>
</html>