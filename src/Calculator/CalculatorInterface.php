<?php

namespace App\Calculator;

interface CalculatorInterface
{
    /**
     * складывает два числа
     * @var float $a первое слагаемое
     */
    public function addition(float $a, float $b): float;
    public function minus(float $a, float $b): float;
    public function multiplication(float $a, float $b): float;
    public function divide(float $a, float $b): float;
}
