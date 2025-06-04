<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
</head>
<body>

    <h1>Atividade 3</h1>

    <form action="http://localhost/atvd3.php" method="post">
        Nome: <input type="text" name="nome"><br><br>
        Sexo: <select name="sexo" id="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>
        Idade: <input type="number" name="idade">
        <button type="submit">verificar</button>
    </form>

    <?php
        if (isset($_POST["nome"], $_POST["sexo"], $_POST["idade"])){

            $nome = $_POST["nome"];
            $sexo = strtolower($_POST["sexo"]);
            $idade = $_POST["idade"];

            if ($sexo == "feminino" && $idade < 25){
                echo "<p> $nome: ACEITA </p>";
            } else {
                echo "<p> $nome: NÃO ACEITA </p>";
            }
        }
    ?>
</body>
</html>