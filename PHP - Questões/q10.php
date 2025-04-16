<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
<form method="post">
<label>Q10 - Crie um programa em PHP que leia uma string do usuário e verifique se essa string é
um palíndromo. Um palíndromo é uma palavra ou frase que pode ser lida da mesma
maneira de trás para frente, ignorando espaços e pontuação.</label>
<hr>
    <label>Escreva uma palavra:</label>
    <input type="string"  name="palavra">

    <input type="submit" value="checar">
  <hr></form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="POST"){
 $palavra = $_POST['palavra'];
 $palvra =  strtolower($palavra);
 $pald = strrev($palvra);
  if($pald == $palvra) {
    echo "Essa palavra é um palíndromo:
    {$palvra} = {$pald}";
  } else {
    echo "Essa palavra não é um palíndromo";
  }
 
}
?>