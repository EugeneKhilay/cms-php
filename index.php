<?php

function mySum($a, $b) {
  echo 'Addition: '.($a + $b).'<br />';
}
mySum(5, 2);

function myDiff($a, $b) {
  echo 'Subtraction: '.($a - $b).'<br />';
}
myDiff(5, 2);

function myMult($a, $b) {
  echo 'Multiplication: '.($a * $b).'<br />';
}
myMult(5, 2);

function myDiv($a, $b) {
  echo 'Division: '.($a / $b).'<br />';
}
myDiv(5, 2);

function myPercent($a) {
  echo 'Percent: '.($a * 0.01).'<br />';
}
myPercent(5);

function mySquare($a) {
  echo 'Square: '.($a * $a).'<br />';
}
mySquare(5);

function myCube($a) {
  echo 'Cube: '.($a * $a * $a).'<br />';
}
myCube(5);

function myExp($a, $b) {
  echo 'Exponentiation: '.($a ** $b).'<br />';
}
myExp(5, 2);

function myE($a) {
  echo 'Exponent of e: '.exp($a).'<br />';
}
myE(5);

function myTenToPow($a) {
  echo 'Ten to the power: '.(10 ** $a).'<br />';
}
myTenToPow(5);

function myInverse($a) {
  echo 'Inverse: '.(1 / $a).'<br />';
}
myInverse(5);

function mySqrt($a) {
  echo 'Square root: '.sqrt($a).'<br />';
}
mySqrt(5);

function myCurt($a) {
  echo 'Cube root: '.pow($a, 1 / 3).'<br />';
}
myCurt(5);

function myNthrt($a, $b) {
  echo 'Nth root: '.pow($a, 1 / $b).'<br />';
}
myNthrt(5, 2);

function myLog($a) {
  echo 'Logarithm: '.log($a).'<br />';
}
myLog(5);

function myLog10($a) {
  echo 'Logarithm 10: '.log10($a).'<br />';
}
myLog10(5);

function myFact($a) {
  echo 'Factorial: '.gmp_fact($a).'<br />';
}
myFact(5);

function mySin($a) {
  echo 'Sine: '.sin(deg2rad($a)).'<br />';
}
mySin(5);
