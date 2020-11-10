<?php
  include "operators.php";

  if(isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
      case 'sum':
        $total = soma($num1, $num2);
        echo "<h1>{$_POST["num1"]} {$_POST["operation"]} {$_POST["num2"]} é igual a {$total}</h1>";
      case 'sub':
        $total = subtracao($num1, $num2);
        echo "<h1>{$_POST["num1"]} {$_POST["operation"]} {$_POST["num2"]} é igual a {$total}</h1>";
      case 'mult':
        $total = multiplicacao($num1, $num2);
        echo "<h1>{$_POST["num1"]} {$_POST["operation"]} {$_POST["num2"]} é igual a {$total}</h1>";
      case 'div':
        $total = divisao($num1, $num2);
        echo "<h1>{$_POST["num1"]} {$_POST["operation"]} {$_POST["num2"]} é igual a {$total}</h1>";
      default: 
        break;
    } else {
      echo 'Números não preenchidos'
    }
  }
  

?>