<?php
 $valorhora = $_POST['valorhora'];
 $horastrabmens = $_POST['horastrabmens'];

$salariobruto = $horastrabmens * $valorhora;
$horastrabsem = $horastrabmens / 5; //5 semanas uteis
$descsind = $salariobruto * 3/100;
$descfgts = $salariobruto * 11/100;
echo "Horas semanais trabalhadas = $horastrabsem<br>";
echo "Horas mensais trabalhadas = $horastrabmens<br>";
echo "Salário bruto = R$$salariobruto<br>";
 //descontos//
 if ($salariobruto <= 900.00)
 {
    $descIR = $salariobruto * 0/100;
    $salarioliquido = $salariobruto - $descsind - $descIR;
     echo "Desconto Sindical:R$$descsind<br>";
     echo "Desconto FGTS:R$$descfgts<br>";
     echo "Desconto Imposto de Renda:R$$descIR<br>";
     echo "Salário líquido: = R$$salarioliquido<br>";
 }

 if ($salariobruto > 900.00 && $salariobruto <= 1500.00)
 {
    $desc1 = $salariobruto * 0.97; 
    $descIR = $salariobruto * 5/100;
    $salarioliquido = $salariobruto - $descsind - $descIR;
     echo "Desconto Sindical:R$$descsind<br>";
     echo "Desconto FGTS:R$$descfgts<br>";
     echo "Desconto Imposto de Renda:R$$descIR<br>";
     echo "Salário líquido: = R$$salarioliquido<br>";
 }
 if ($salariobruto > 1500.00 && $salariobruto <= 2500.00)
 {
     $desc1 = $salariobruto * 0.97; 
     $descIR = $salariobruto * 10/100;
     $salarioliquido = $salariobruto - $descsind - $descIR;
     echo "Desconto Sindical:R$$descsind<br>";
     echo "Desconto FGTS:R$$descfgts<br>";
     echo "Desconto Imposto de Renda:R$$descIR.<br>";
     echo "Salário líquido: = R$$salarioliquido<br>";
 }
 if ($salariobruto > 2500.00)
 {
    $desc1 = $salariobruto * 0.97; 
    $descIR = $salariobruto * 20/100;
    $salarioliquido = $salariobruto - $descsind - $descIR;
     echo "Desconto Sindical:R$$descsind<br>";
     echo "Desconto FGTS:R$$descfgts<br>";
     echo "Desconto Imposto de Renda:R$$descIR.<br>";
     echo "Salário líquido: = R$$salarioliquido<br>";
 }
 

