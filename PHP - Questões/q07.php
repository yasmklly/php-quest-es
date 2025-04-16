<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>
<form method="get" >
<label>Q07 - Escreva um programa que inverta a ordem dos elementos de uma matriz de inteiros.</label>
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
    for($l = 2; $l >= 0; $l-- ){
    
        for($c = 2; $c >= 0; $c--){
            echo '<pre>';
            print_r($matriz[$l][$c]);
            echo '</pre>';
    }
    }
}
?>