<?php
/**
 * Generally PHP display Decimal number
 * it can be either binary,hexadecimal,octal
 */
    //Decimal Number
    $num1=10;
    var_dump($num1);
    echo "<br>";
    //Negative decimal number
    $num2=-10;
    var_dump($num2);
    echo "<br>";
    //Number starting from 0 then it is Ocatal number in PHP
    $num3=0123;
    var_dump($num3);
    echo "<br>";
    //Number starting from 0x then it is Hexadecimal
    $num4=0x12;
    var_dump($num4);
    echo "<br>";
    //Number starting from 0b then it is Binary
    $num5=0b10;
    var_dump($num5);
?>