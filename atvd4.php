<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ordem Decrescente</title>
</head>
<body>

    <h1>Atividade 4</h1>

    <form action="http://localhost/ativdade1/atvd4.php" method="post">
        Número 1: <input type="number" name="num1"><br><br>
        Número 2: <input type="number" name="num2"><br><br>
        Número 3: <input type="number" name="num3"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    if (isset($_POST["num1"], $_POST["num2"], $_POST["num3"])){

        $num1 = (int) $_POST["num1"];
        $num2 = (int) $_POST["num2"];
        $num3 = (int) $_POST["num3"];

        $numeros = [$num1, $num2, $num3];
        rsort($numeros);

        echo implode(", ", $numeros);
    }
    ?>
    
</body>
</html>