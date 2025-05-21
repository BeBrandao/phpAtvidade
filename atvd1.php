<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>

    <h1>Atividade 1</h1>

    <form action="http://localhost/atvd1.php" method="post">
        Número 1: <input type="number" name="num1"><br><br>
        Número 2: <input type="number" name="num2"><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $soma = $num1 + $num2;

    $resultado = $soma;

    if ($soma > 20) {
        $resultado += 8;
    } else {
        $resultado -= 5;
    }
    echo "<p>O resultado final é: " . $resultado . "</p>";
    }
    ?>

</body>
</html>