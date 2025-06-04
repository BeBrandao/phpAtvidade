<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto</title>
</head>
<body>

    <h1>Atividade 8</h1>

    <form action="http://localhost/ativdade1/atvd8.php" method="post">
        Número: <input type="number" name="num1"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    if (isset($_POST["num1"])){

        $num1 = (int) $_POST["num1"];
        $num2 = 1;

        while ($num2 <= $num1){
            $produto = $num1 * $num2;
            echo "<p>$num2 * $num1 = $produto</p>";
            $num2++;
        }
    }
    ?>
    
</body>
</html>