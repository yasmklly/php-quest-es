<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
<form method="get" action = "q03.php">
<label>Q03 - Escreva um programa que leia 20 valores inteiros entre 1 e 10 e insira-os numa
matriz. Depois, o utilizador deverá indicar um valor e o programa deverá indicar em que
posição ou posições onde se encontra esse mesmo valor.Se o valor não existir na matriz o programa deverá dar a respectiva mensagem.</label>
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

<hr>
<label>Escolha um número na matriz:</label>
<input type="number"  min="0" max = "10" name="num">
<input type="submit" value="enviar">


</form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="GET"){
    $matriz = $_GET['matriz'];
    $num = $_GET['num'];
    $count = 0;
    for ($l = 0; $l < 5; $l ++){
        for ($c = 0; $c < 4; $c ++){
       if ($matriz[$l][$c] == $num){
        $posicao = "A posição é [$l] x [$c]";
        echo $posicao;
        $cont++;
       }
        

        } 
    } if($cont == 0){
        echo "O valor não existe na matriz";
    }
    
}
?>
