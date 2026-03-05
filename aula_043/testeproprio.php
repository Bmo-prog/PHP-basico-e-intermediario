<!DOCTYPE html>
<html>
<head>
    <title>Tabuada Dinâmica</title>
</head>
<body>

<h2>Escolha um número</h2>

<form method="GET">
    <input type="number" name="numero" required>
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_GET['numero'])) {

    $numero = $_GET['numero'];
    $numeros = range(1, 10);

    echo "<h3>Tabuada do $numero</h3>";

    foreach ($numeros as $n) {
        echo "$numero x $n = " . ($numero * $n) . "<br>";
    }
}
?>

</body>
</html>