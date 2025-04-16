<?php
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
?>