<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo</title>
</head>
<body>

    <h1>Atividade 7</h1>

    <form action="http://localhost/ativdade1/atvd7.php" method="post">
        Nome: <input type="text" name="nome"><br><br>
        Usuario: <select name="usuario" id="usuario">
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select><br><br>
        Livro: <input type="text" name="livro">
        <button type="submit">verificar</button>
    </form>

    <?php
        if (isset($_POST["nome"], $_POST["usuario"], $_POST["livro"])){

            $nome = $_POST["nome"];
            $usuario = $_POST["usuario"];
            $livro = $_POST["livro"];
            $tempo = 0;

            if ($usuario == "Professor"){
                $tempo = 10;
            } else {
                $tempo = 3;
            }
            echo "<p> $usuario: $nome <br>Livro: $livro <br>Prazo de devolução: $tempo dias a partir do dia 03-06-25</p>";
        }
    ?>
</body>
</html>