<?php

declare(strict_types=1);

session_start();

require "../src/autoload.php";

use  App\Calculator\Calculator;

// echo "Hello";
$obj = new Calculator();
echo $obj->addition(4, 7);
echo "<br>";
echo $obj->minus(25, 7);
echo "<br>";
echo $obj->multiplication(5, 7);
echo "<br>";
echo $obj->divide(77, 7);