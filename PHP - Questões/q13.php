<?php
    $message = "";

    if (isset($_GET['adivinha'])){
        $adivinha = intval($_GET['adivinha']);
    }else {
        $adivinha = rand(1, 10);
    }
    if($_SERVER["REQUEST_METHOD"]="GET" && isset ($_GET['numero'])){
        $numero = intval ($_GET['numero']);

        if ($numero < $adivinha){
            $message = "O número é maior que $numero. Tente novamente";
        } elseif ($numero > $adivinha){
            $message = "O número é menor que $numero. Tente novamente";
        } else {
            $message = "Parabéns! Você acertou o número $adivinha!";
            $adivinha = rand (1, 10);
        }
    }
    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
    
<form method="get">
<label>Q14 - Escreva um script PHP que implementa um jogo simples de "Adivinhação de
Números". O programa deve gerar um número aleatório entre 1 e 100 e permitir que o
usuário tente adivinhar o número. Para cada tentativa, o programa deve informar se o
número é maior, menor ou igual ao número gerado. O jogo continua até que o usuário
acerte o número.</label>
<br>
<label>🎀Jogo de Adivinhação🎀:</label>
<br>

<hr>

<br>
    <label>Digite um número:</label>
    <input type="number" min="0" max="100" name="numero">
    <input type="hidden" min="0" max="100" name="adivinha" value = "<?php
    echo $adivinha?>">
    <input type="submit" value="enviar">
  <hr>
</form>
<?php
if (!empty($message)){
    echo "<hr>";
    echo "<p>$message</p>";
    } 
?>

</body>
</html>


