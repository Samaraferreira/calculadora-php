<?php
  include "operators.php";

  if(isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
      case 'soma':
        $total = soma($num1, $num2);
        echo "<h1>A soma de {$num1} e {$num2} é igual a {$total}</h1>";
        break;
      case 'subtracao':
        $total = subtracao($num1, $num2);
        echo "<h1>A subtração de {$num1} e {$num2} é igual a {$total}</h1>";
        break;
      case 'multiplicacao':
        $total = multiplicacao($num1, $num2);
        echo "<h1>A multiplicação de {$num1} por {$num2} é igual a {$total}</h1>";
        break;
      case 'divisao':
        $total = divisao($num1, $num2);
        echo "<h1>A divisão de {$num1} por {$num2} é igual a {$total}</h1>";
        break;
      default: 
        break;
    }
  } else {
    echo 'Números não preenchidos';
  }
  

?>