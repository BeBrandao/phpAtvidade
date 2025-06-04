<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meses do Ano</title>
</head>
<body>

    <h1>Atividade 6</h1>

    <form action="http://localhost/ativdade1/atvd6.php" method="post">
        Mês: <input type="number" name="mes"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <?php
    if (isset($_POST["mes"])){

        $mes = (int) $_POST["mes"];

        if($mes >= 1 && $mes <= 12){

            $Meses = [
                1 => "Janeiro",
                2 => "Fevereiro",
                3 => "Março",
                4 => "Abril",
                5 => "Maio",
                6 => "Junho",
                7 => "Julho",
                8 => "Agosto",
                9 => "Setembro",
                10 => "Outubro",
                11 => "Novembro",
                12 => "Dezembro",
            ];

            echo $Meses[$mes];
        }else {
            echo "<p>Não existe mês com esse número</p>";
        }

    }
    ?>
    
</body>
</html>