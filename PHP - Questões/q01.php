<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    
<form method="get">
<label>Q01 - Crie um programa que leia o valor das vendas de uma empresa em 4 anos consecutivos: 2020, 2021, 2022 e 2023. Os valores deverão ser positivos. O programa deverá indicar em quantos anos neste período o valor de vendas cresceu em relação ao ano anterior (o valor de saída será entre 0 e 3). Deverá indicar ainda o crescimento percentual entre o ano 2020 e 2023. (utilizado ciclos).</label>
<hr>
    <label>Digite o seu número de vendas em 2020:</label>
    <input type="number"  min="0" name="num20">
    <label><br>Digite o seu número de vendas em 2021:</label>
    <input type="number" min="0" name="num21">
    <label><br>Digite o seu número de vendas em 2022:</label>
    <input type="number" min="0" name="num22">
    <label><br>Digite o seu número de vendas em 2023:</label>
    <input type="number" min="0" name="num23">

    <input type="submit" value="enviar">
  <hr>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="GET"){
    $num20 = $_GET["num20"];
    $num21 = $_GET["num21"];
    $num22 = $_GET["num22"];
    $num23 = $_GET["num23"];
    $som = 0;
    if($num21 > $num20) {
        $som=$som+1;
    }
    if($num22 > $num21) {
        $som=$som+1;
    }
    if($num23 > $num22) {
        $som=$som+1;
}
   $cont1 = (($num21-$num20)/$num20)*100;
   $cont2 = (($num22-$num21)/$num21)*100;
   $cont3 = (($num23-$num22)/$num22)*100;
 echo "<br>O valor de vendas cresceu em {$som} e o crescimento
 percentual entre os anos de: <br> 2020 e 2021 foi {$cont1}%. <br> 2021 e 2022 foi {$cont2}% <br> 2022 e 2023 foi {$cont3}%";
}
?>