<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
      
<form method="get">
    <label>Digite um número:</label>
    <input type="number" name="num1">
    <label>Digite outro número:</label>
    <input type="number" name="num2">
    <select name="operacao" id="operacao">
        <option value="+">Somar</option>
        <option value="-">Subtrair</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
        <option value="%">Módulo</option>

    </select>

    <input type="submit" value="Enviar">

    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]="GET"){
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$op = $_GET["operacao"];

switch ($op){
    case "+":
    print_r ("A soma é ".($num1+$num2));
    break;
    case "-":
    print_r ("A subtração é ".($num1-$num2));
    break;
    case "*":
    print_r ("A multiplicação é ".($num1*$num2));
    break;
    case "/":
    print_r ("A divisão é ".($num1/$num2));
    break;
    case "%":
    print_r ("O módulo é ".($num1%$num2));
    break;
    default;
    echo "Nenhuma operação válida";
    break;

}
}
?>