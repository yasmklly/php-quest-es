<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
<form method="get" >
<label>Q05 - Escreva um programa que determine o 2o maior valor de uma matriz 4x3</label>
<hr>
<table>
    <label> digite os numeros da matriz abaixo:</label>
<?php
for($l = 0; $l < 12; $l++ ){
    echo"<tr>";
        echo"<td><input type = 'number'
        name = 'num[]' required>
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
    $num = $_GET['num'];

    for ($i=0; $i < 12; $i++) { 
        $matriz[$i] = $num[$i];
    }

    $maxvalor = max($matriz);
    $maior_posição = array_search($maxvalor, $matriz);

    unset($matriz[$maior_posição]);
    $segundomax = max($matriz);
    print_r($segundomax);
}
?>