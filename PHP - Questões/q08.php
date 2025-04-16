<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meia noite eu te conto</title>
</head>
<body>
<form method="GET" >
<label>Q08 - Escreva um programa que peça as datas de nascimento de 40 alunos de uma turma.
O programa deve guardar estes valores numa matriz e no final indicar a idade máxima,
mínima e a média da turma.</label>
<hr>
<table>
    <label>Insira a data de nascimento dos alunos:</label>
<?php
for($l = 0; $l < 5; $l++ ){
    echo"<tr>";
        echo"<td><input type = 'date'
        name = 'data[]' required>
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
    $data = $_GET['data'];
    $datamax = min($data);
    $dataNascimento = $datamax;
    $date = new DateTime($dataNascimento );
    $interval = $date->diff( new DateTime( date('Y-m-d') ) );
   echo $interval->format( 'A idade máxima é: %Y anos' );
echo "<br>";
   $datamin = max($data);
   $dataNascimento = $datamin;
   $date = new DateTime($dataNascimento );
   $interval = $date->diff( new DateTime( date('Y-m-d') ) );
  echo $interval->format( 'A idade mínima é: %Y anos' );
echo "<br>";

    function calcularIdade($dat) {
        $dat = new DateTime($dat);
        $datatual = new DateTime();
        $interval =  $datatual ->diff($dat);
        return $interval -> y;
    } 
   
    $somaIdade = 0;
    for ($i=0; $i < count($data) ; $i++) { 
        $idade = calcularIdade($data[$i]);
        $soma +=$idade;
    }
    $media = $soma/count($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "Total de idades: {$soma} <br> Média: {$media}";
    
}   
?>