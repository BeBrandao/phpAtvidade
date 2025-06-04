<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Repetição</title>
</head>
<body>

    <h1>Atividade 9</h1>

    <form action="http://localhost/ativdade1/atvd9.php" method="post">
        Número: <input type="number" name="num1"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    if (isset($_POST["num1"])){

        $num1 = (int) $_POST["num1"];

      for ($i = 1; $i <= $num1; $i++){
        echo "<p>SOL</p>";
      }
    }
    ?>
    
</body>
</html>