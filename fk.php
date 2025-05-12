<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Roxa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg,rgb(65, 41, 173),rgb(74, 50, 151));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a1b9a;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
            color: #4a148c;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ce93d8;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 15px;
            background-color: #f3e5f5;
        }

        input[type="submit"] {
            background-color:rgb(70, 36, 170);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #6a1b9a;
        }

        h2, h3 {
            color: #4a148c;
            text-align: center;
        }

        .resultado {
            margin-top: 30px;
            background-color: #f3e5f5;
            padding: 20px;
            border: 1px solid #ce93d8;
            border-radius: 12px;
            text-align: center;
        }

        .resultado p {
            font-size: 16px;
            color: #4a148c;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <form method="post">
        <h1>Calculadora</h1>

        <label for="numero1">Digite o primeiro número</label>
        <input type="text" id="numero1" name="numero1" required>

        <label for="numero2">Digite o segundo número</label>
        <input type="text" id="numero2" name="numero2" required>

        <label for="op">Escolha a operação</label>
        <select id="op" name="op">
            <option value="+">SOMA</option>
            <option value="-">SUBTRAIR</option>
            <option value="*">MULTIPLICAR</option>
            <option value="/">DIVIDIR</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n1 = (float) $_POST['numero1'];
        $n2 = (float) $_POST['numero2'];
        $op = $_POST['op'];

        $resultado = '';
        $titulo = '';
        $erro = '';

        switch ($op) {
            case "+":
                $titulo = "Soma";
                $resultado = $n1 + $n2;
                break;
            case "-":
                $titulo = "Subtração";
                $resultado = $n1 - $n2;
                break;
            case "*":
                $titulo = "Multiplicação";
                $resultado = $n1 * $n2;
                break;
            case "/":
                $titulo = "Divisão";
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                } else {
                    $erro = "Erro: divisão por zero.";
                }
                break;
            default:
                $erro = "Operação inválida.";
        }

        echo '<div class="resultado">';
        if ($erro) {
            echo "<p>$erro</p>";
        } else {
            echo "<h2>$titulo</h2>";
            echo "<p><strong>Número 1:</strong> $n1</p>";
            echo "<p><strong>Número 2:</strong> $n2</p>";
            echo "<p><strong>Operação:</strong> $op</p>";
            echo "<p><strong>Resultado:</strong> $resultado</p>";
        }
        echo '</div>';
    }
    ?>
</body>
</html>
