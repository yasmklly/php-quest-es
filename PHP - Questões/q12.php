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
<label>Q12 - Escreva um script PHP que leia um número inteiro positivo do usuário e imprima
todos os números pares de 0 até esse número.</label>
<hr>
    <label>Digite um número:</label>
    <input type="number" min="0" name="num">

    <input type="submit" value="enviar">
  <hr>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="GET"){
$num = $_GET ["num"];
for ($i = 0; $i < $num; $i ++){
    if ($i % 2 == 0) {
        echo "{$i}\n";
    }

}
}
?>