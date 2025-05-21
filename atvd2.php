<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Atividade 1</h1>

<form action="http://localhost/atvd2.php" method="post">
    Número 1: <input type="number" name="num"><br><br>
    <button type="submit">verificar</button>
</form>

<?php
    if (isset($_POST["num"])){
        $num = $_POST["num"];
        $resposta = "";

        if ($num%10 === 0){
            $resposta .= "<p>É divisivel por 10 </p><br>";
        }
        if ($num%5 === 0){
            $resposta .= "<p>É divisivel por 5 </p><br>";
        }
        if ($num%2 === 0){
            $resposta .= "<p>É divisivel por 2 </p><br>";
        }
    echo $resposta;
    }
?>
</body>
</html>
