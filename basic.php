<?php

define('PI', 3.14159);

echo phpversion();
echo PHP_EOL;

$a = 10;
$b = 20;

var_dump($a);

class Fruits
{
    public function myValue()
    {
        return __CLASS__;
    }
}

$kiwi = new Fruits();
echo $kiwi->myValue();

echo "The sum of $a and $b is " . ($a + $b);
echo PHP_EOL;

echo "The difference of $a and $b is " . ($a - $b);
echo PHP_EOL;

echo "The multiplication of $a and $b is " . ($a * $b);
echo PHP_EOL;

echo "The division of $a and $b is " . ($a / $b);
echo PHP_EOL;

echo "The modulus of $a and $b is " . ($a % $b);
echo PHP_EOL;

echo "The exponential of $a and $b is " . ($a ** $b);
echo PHP_EOL;

echo "The increment of $a is " . ++$a;
echo PHP_EOL;

echo "The decrement of $a is " . --$a;
echo PHP_EOL;

echo "The comparison of $a and $b is " . ($a == $b);
echo PHP_EOL;

echo PHP_EOL;


// Data Types

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL

$#