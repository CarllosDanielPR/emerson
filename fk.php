<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cauculadora</title>
    </head>
    <body>
        <form method="post">
            <h1>cauculadora</h1>
            <label for="email"> digite o primeiro numero</label>
            <br>
            <input type="text" id="numero1" name="numero1" required>
            <br>
            <label for="email">digite o segundo numero</label>
            <br>
            <input type="text" id="numero2" name="numero2" required>
            <br>
            <label for="operaçoes">escolha a operação</label>
            <br>
            <select id="op" name="op">
                <option value="+">SOMA</option>
                <option value="-">SUBTRAIR</option>
                <option value="*">MULTIPLICAR</option>
                <option value="/">DIVIDIR</option>
            </select><br><br>
            <input type="submit" value="calcular">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $op = $_POST['op'];
        }
        if ($op == "+") {
            echo "<h2>Soma</h2>";
            echo "Resultado da soma: " . ($n1 + $n2) . "<br>";
        }
        if ($op == "-") {
            echo "<h2>Subtração</h2>";
            echo "Resultado da subtração: " . ($n1 - $n2) . "<br>";
        }
        if ($op == "*") {
            echo "<h2>Multiplicação</h2>";
            echo "Resultado da multiplicação: " . ($n1 * $n2) . "<br>";
        }
        if ($op == "/") {
            echo "<h2>Divisão</h2>";
            if ($n2 != 0) {
                echo "Resultado da divisão: " . ($n1 / $n2) . "<br>";
            } else {
                echo "Erro: divisão por zero<br>";
            }
        }
        echo "Operação escolhida: " . $op . "<br>";
        echo "<h2>Resultado</h2>";
        echo "Número 1: " . $n1 . "<br>";
        echo "Número 2: " . $n2 . "<br>";
        ?>
</body>
</html>
