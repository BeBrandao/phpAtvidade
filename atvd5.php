<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Triangulo</title>
</head>
<body>

    <h1>Atividade 5</h1>

    <form action="http://localhost/ativdade1/atvd5.php" method="post">
        Número 1: <input type="number" name="num1"><br><br>
        Número 2: <input type="number" name="num2"><br><br>
        Número 3: <input type="number" name="num3"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST["num1"], $_POST["num2"], $_POST["num3"])){

        $A = (int) $_POST["num1"];
        $B = (int) $_POST["num2"];
        $C = (int) $_POST["num3"];

        if ($A < $B + $C && $B < $A + $C && $C < $A + $B) {
            
            if ($A === $B && $B === $C) {
                echo "<p>Triângulo Equilátero</p>";
            } elseif ($A === $B || $A === $C || $B === $C) {
                echo "<p>Triângulo Isósceles</p>";
            } else {
                echo "<p>Triângulo Escaleno</p>";
            }
        } else {
            echo "<p>Os lados informados <strong>não formam</strong> um triângulo.</p>";
        }
        
    }
    ?>
    
</body>
</html>