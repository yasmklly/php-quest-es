<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>
<form method="get" >
<label>Q09 - Crie um programa que simule 100 lançamentos de 2 dados D6, guarde os resultados
em matrizes e diga a porcentagem que cada número sai.
</label>
<input type="submit" value="Lançar">
<hr>

</form>
</body>
</html>

<?php
$lanc = array();
$resul = array(0,0,0,0,0,0,0,0,0,0);
for($i = 1; $i <= 100; $i++){
    $dado = rand(2,12);
    $lanc[$i] = $dado;
    $resul[$dado]++;

}
for($i = 1; $i <= 12; $i++){
    $pct = ($resul[$i]/100)*100;
    echo "O número {$i} apareceu {$pct}% durante os lançamentos<br>";
}
?>