<?php
session_start();

if (!isset($_SESSION["numeros"])) {
    $_SESSION["numeros"] = [];
}

if (isset($_POST["numero"])) {
    $num = (float) $_POST["numero"];
    $_SESSION["numeros"][] = $num;
}

if (count($_SESSION["numeros"]) >= 10) {
    $positivos = 0;
    $negativos = 0;

    foreach ($_SESSION["numeros"] as $n) {
        if ($n >= 0) {
            $positivos += $n;
        } else {
            $negativos++;
        }
    }

    echo "<p>Soma dos positivos: $positivos</p>";
    echo "<p>Total de negativos: $negativos</p>";

    session_destroy();
} else {
    $faltam = 10 - count($_SESSION["numeros"]);
    echo "<p>Você ainda precisa digitar $faltam número(s).</p>";
}
?>

<form method="post">
    Número: <input type="number" name="numero" required>
    <button type="submit">Enviar</button>
</form>
