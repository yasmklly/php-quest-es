<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 06</title>
</head>
<body>
<form method="get" >
<label>Q06 - Escreva um programa que indique se todos os valores de uma matriz 4x4 são iguais,
se são todos diferentes, ou se há valores repetidos na matriz.</label>
<hr>
<table>
    <label> digite os numeros da matriz abaixo:</label>
<?php
for($l = 0; $l < 8; $l++ ){
    echo"<tr>";
        echo"<td><input type = 'number'
        name = 'matriz[]' required>
        </td>";
    } echo"</tr>";

?>
</table>

<input type="submit" value="enviar">
<hr>

</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $matriz = $_GET['matriz'];
$count = 0;
$tmatriz = count($matriz);

for ($i = 0; $i < $tmatriz; $i++){
    for ($j = 0; $j < $tmatriz; $j++){
        if ($matriz[$i] == $matriz[$j] and $j != $i){
            $count++;
        }
    }
    if($count == ($tmatriz - 1) and ($i == 0)){
        break;
    }
} if($count ==  ($tmatriz - 1)){
    echo "Todos os valores são iguais.";
} elseif($count == 0) {
    echo "Todos os valores são diferentes.";
} else {
    echo "Alguns valores são iguais.";
}
}
?>