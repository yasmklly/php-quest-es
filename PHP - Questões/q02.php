<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
<form method="post">
<label>Q02 - Escreva um programa que leia 3 notas de um aluno (teórica, prática e projecto). As
notas deverão estar no intervalo 0-20. A nota final é dada pela soma pesada das notas
(TEOR=50% PRAT=30% PROJ=20%). O aluno será aprovado se a soma das 3 notas for
superior a 30 ou no caso de a nota prática e teórica serem ambas iguais ou superiores a 13.
O aluno deverá ser submetido a um exame oral se a nota teórica for 8 ou 9 ou no caso de a
média final ser superior a 14. O programa deverá indicar todos os resultados.
Para passar o aluno deverá ter uma nota igual ou superior a 8 em ambas as frequências e
uma nota igual ou superior a 10 na média das duas frequências (F). O programa deverá
verificar se os valores introduzidos para as frequências estão no intervalo entre 0 e 20.
O trabalho deverá ter um valor entre 0 e 4.</label>
<hr>
    <label>Digite a nota teórica:</label>
    <input type="number"  min="0" max="20" name="nottr">
    <label><br>Digite a nota prática:</label>
    <input type="number" min="0" max="20" name="notpt">
    <label><br>Digite a nota de projeto:</label>
    <input type="number" min="0" max="4" name="notpj">

    <input type="submit" value="enviar">
  <hr></form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="POST"){
    $nottr = $_POST["nottr"];
    $notpt = $_POST["notpt"];
    $notpj = $_POST["notpj"];

    $ptr = 50/100*($nottr);
    $ppt = 30/100*($notpt);
    $ppj = 20/100*($notpj);

    $notfinal = $ptr + $ppt + $ppj;
    $mediaf = ($ptr + $ppt + $ppj)/3;

    // frequencia é a pratica e a teorica
    $mediafrequencia = ($nottr + $notpt)/2;

    if ($notfinal > 30 or $notpt == $nottr and $notpt > 13 and $nottr > 13) {
        echo "<br>Você foi aprovado!";
    }
    elseif ($nottr == 8 or $nottr == 9 or $mediaf > 14){
        echo "<br>Você realizará um exame oral";
    }
    elseif ($nottr >= 8 and $notpt >= 8 and $mediafrequencia >= 10){
        echo "<br>Você passou!";
    } else {
    echo "Você não passou";}

}

?>