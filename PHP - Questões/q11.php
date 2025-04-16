<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>
<form method="get" >
<label>Q11 - Escreva um script PHP que leia uma matriz 3x3 de números inteiros fornecidos pelo
usuário e calcule a soma dos elementos da diagonal principal.</label>
<hr>
<table>
<?php
for($l = 0; $l < 3; $l++ ){
    echo"<tr>";
    for($c = 0; $c < 3; $c++){
        echo"<td><input type = 'number'
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
    $sum =  $matriz[0][0] + $matriz[1][1] + $matriz[2][2];
    echo "A soma das matrizes da diagonal principal são: {$sum}";
}
?>