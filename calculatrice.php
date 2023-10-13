<?php
declare(strict_types=1);
function isOp($op): bool
{
    return strlen($op) === 1 && preg_match('/[-+\/\*%]/',$op);
}

 function calculatrice(float $num1,string $op, ?float $num2 = 0)
 {
    // var_dump(isOp($op));die;
    if(!isOp($op)){
        return "opérateur invalide";
    }
    if(is_numeric($num1) && is_numeric($num2)){
        switch ($op) {
            case "+":
                return $num1 + $num2;
            case "-":
                return $num1 - $num2;
            case "/":
                return $num1 / $num2;
            case "*":
                return $num1 * $num2;
            case "%":
                return $num1 % $num2;
            default:
                return "vous devez entrer des nombres pour les opérations";
        }
    }
 }

 echo calculatrice(9,"a",2);
