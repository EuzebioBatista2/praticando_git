<?php

function compararNumero($num1, $num2)
{
    if($num1 > $num2) {
        echo "O primeiro número é maior. <br>";
    } else if($num2 > $num1) {
        echo "O segundo número é maior. <br>";
    } else {
        echo "Os números são iguais. <br>";
    }
}

compararNumero(5, 4);
compararNumero(4, 5);
compararNumero(5, 5);