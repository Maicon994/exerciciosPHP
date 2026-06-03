<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            /* Para conter o box-shadow */
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }

        ul,
        ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>


        <?php
        // Exercício Soma:
        echo "<div class='exercicio'>";
        echo "<h3>Soma de dois números:</h3>";
        $num1 = 20;
        $num2 = 30;
        $soma = $num1 + $num2;
        echo "<p>Valor 1: <code>$num1</code></p>";
        echo "<p>Valor 2: <code>$num2</code></p>";
        echo "<div class='resultado'>O valor da soma é: <strong>$soma</strong></div>";
        echo "</div>";



        // ----------------------------------------------------
        // Exercício Média:
        echo "<div class='exercicio'>";
        echo "<h3>Média das notas:</h3>";
        $nota1 = 7;
        $nota2 = 6;
        $nota3 = 9;
        echo "<p>Nota 1: <code>$nota1</code></p>";
        echo "<p>Nota 2: <code>$nota2</code></p>";
        echo "<p>Nota 3: <code>$nota3</code></p>";
        $media = number_format(($nota1 + $nota2 + $nota3) / 3, 2);
        echo "<div class='resultado'>A média de todas as notas é: <strong>$media</strong></div>";
        echo "</div>";



        // ----------------------------------------------------
        // Exercício M para cm:
        echo "<div class='exercicio'>";
        echo "<h3>Metros para centímetros:</h3>";
        $numMetros = 40;
        echo "<p>Valor em metros: <code>$numMetros</code></p>";
        $convert = number_format($numMetros * 100, 2);
        echo "<div class='resultado'>A média de todas as notas é: <strong>$convert</strong></div>";
        echo "</div>";



        //Exercício area do triangulo
        echo "<div class='exercicio'>";
        echo "<h3>Área do triângulo:</h3>";
        $base = 12;
        $altura = 8;
        echo "<p>Nota 1: <code>$base</code></p>";
        echo "<p>Nota 2: <code>$altura</code></p>";
        $area = number_format(($base * $altura) / 2, 2);
        echo "<div class='resultado'>O valor da área é: <strong>$area</strong></div>";
        echo "</div>";



        //Exercicios if else
        echo "<div class='exercicio'>";
        echo "<h3>Positivo, Negativo ou Nulo?:</h3>";
        $num = 7;
        echo "<p>Número: <code>$num</code></p>";
        if ($num > 0) {
            $num = "O número é positivo";
        } else if ($num == 0) {
            $num = "O número é nulo";
        } else {
            $num = "O número é negativo";
        }
        echo "<div class='resultado'>O tipo de número é: <strong>$num</strong></div>";
        echo "</div>";



        //Exercicio maior idade
        echo "<div class='exercicio'>";
        echo "<h3>Maior idade:</h3>";
        $idade = 15;
        echo "<p>Idade: <code>$idade</code></p>";
        if ($idade >= 18) {
            $idade = "É maior de idade";
        } else {
            $idade = "É menor de idade ainda";
        }
        echo "<div class='resultado'>O tipo de número é: <strong>$idade</strong></div>";
        echo "</div>";


        // Exercício Média 2:
        echo "<div class='exercicio'>";
        echo "<h3>Média das notas 2:</h3>";
        $mediaFinal = 6.5;
        echo "<p>Sua Média Final: <code>$mediaFinal</code></p>";
        if ($mediaFinal >= 6) {
            $mediaFinal = "Está aprovado.";
        } else {
            $mediaFinal = "Está reprovado.";
        }
        echo "<div class='resultado'>Situação atual: <strong>$mediaFinal</strong></div>";
        echo "</div>";


        //Exercicio maior e menor:
        echo "<div class='exercicio'>";
        echo "<h3>Qual é o maior?:</h3>";
        $numero1 = 5;
        $numero2 = 20;
        $resultado = "";
        echo "<p>Valor 1: <code>$numero1</code></p>";
        echo "<p>Valor 2: <code>$numero2</code></p>";
        if ($numero1 > $numero2) {
            $resultado = "Número 1 é o maior.";
        } else {
            $resultado = "Número 2 é o maior.";
        }
        echo "<div class='resultado'>Resultado: <strong> $resultado</strong></div>";
        echo "</div>";



        // ----------------------------------------------------
        // Exercício Dias da Semana:
        echo "<div class='exercicio'>";
        echo "<h3>Dias da Semana</h3>";
        $dia = 4;
        echo "<p>Dia da Semana: <code>$dia</code></p>";
        $corNome = "";
        switch ($dia) {
            case 1:
                $dia = "Sábado";
                break;
            case 2:
                $dia = "Domingo";
                break;
            case 3:
                $dia = "Segunda-Feira";
                break;
            case 4:
                $dia = "Terça-Feira";
                break;
            case 5:
                $dia = "Quarta-Feira";
                break;
            case 6:
                $dia = "Quinta-Feira";
                break;
            case 7:
                $dia = "Sexta-Feira";
                break;
            default:
                $dia = "Dia da Semana inválido";
        }
        echo "<div class='resultado'>Dia Escolhido: <strong>$dia</strong></div>";
        echo "</div>";


        //Exercicio vogal ou consoante
        echo "<div class='exercicio'>";
        echo "<h3>Vogal ou Consoante:</h3>";
        $letra = "J";
        $letraMins = strtolower($letra);
        echo "<p>Letra escolhida: <code>$letra</code></p>";
        $tipoLetra = "";
        switch ($letraMins) {
            case 'a':
            case 'e':
            case 'i':       
            case 'o':
            case 'u':
                $tipoLetra = "A letra selecionada é vogal";
                break;
            default:
                $tipoLetra = "A letra selecionada é consoante";
        }
        echo "<div class='resultado'>Tipo da letra escolhida: <strong>$tipoLetra</strong></div>";
        echo "</div>";


        // Exercício status de pedido:
        echo "<div class='exercicio'>";
        echo "<h3>Status do pedido</h3>";
        $status = "Enviado";
        echo "<p>Status atual: <code>$status</code></p>";
        $mensagem = "";
        switch ($status) {
            case 'Aguardando':
               $mensagem = "Olá, seu pedido ainda está em análise!";
                break;
            case 'Em preparação':
               $mensagem = "Olá de novo, seu pedido já está sendo preparado para envio.";
                break;
            case 'Enviado':
                $mensagem = "Olá! seu pedido já foi feito e está a caminho.";
                break;
            case 'Concluido':
              $mensagem = "Pedido entregue com sucesso.";
                break;
            default:
                $mensagem = "Dia da Semana inválido";
        }
        echo "<div class='resultado'>Status atual do pedido: <strong>$mensagem</strong></div>";
        echo "</div>";


        // ----------------------------------------------------
        // Lista dos pares entre 0 e 10 (For)
        echo "<div class='exercicio'>";
        echo "<h3>Lista de pares entre 0 e 10(For)</h3>";
        echo "<div class='resultado'>";
        for ($i = 0; $i <= 10; $i += 2) {
            echo "<strong>$i</strong> ";
        }
        echo "</div>";
        echo "</div>";


        // Fim do bloco PHP
        ?>
    </div>
</body>

</html>