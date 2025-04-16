<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
<form method="get" >
<label>Q04 - Crie um programa que apresente a soma de todos os valores de uma matriz de
inteiros de 5 x 4 posições. Os valores devem ser introduzidos pelo utilizador.</label>
<hr>
<table>
<?php
for($l = 0; $l < 5; $l++ ){
    echo"<tr>";
    for($c = 0; $c < 4; $c++){
        echo"<td><input type = 'number' min = '1' max = '10'
        name = 'matriz[$l][$c]' required>
        </td>";
    } echo"</tr>";
}
?>
</table>

<input type="submit" value="enviar">
<hr>

</form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="GET"){
    $matriz = $_GET['matriz'];
    $sum = $matriz[0][0] + $matriz[0][1] + $matriz[0][2] + $matriz[0][3]
     + $matriz[1][0] + $matriz[1][1]+ $matriz[1][2]+ $matriz[1][3] 
     + $matriz[2][0]+ $matriz[2][1]+ $matriz[2][2]+ $matriz[2][3] 
     + $matriz[3][0]+ $matriz[3][1]+ $matriz[3][2]+ $matriz[3][3] 
     + $matriz[4][0]+ $matriz[4][1]+ $matriz[4][2]+ $matriz[4][3];
    echo "A soma dos elementos é: {$sum}";
 
   

}
?>
