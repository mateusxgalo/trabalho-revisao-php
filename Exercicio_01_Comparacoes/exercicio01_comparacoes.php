<?php

$a = "10";
$b = 10;
$c = 10;

var_dump($a == $b);   // bool(true)
var_dump($a === $b);  // bool(false)
var_dump($b == $c);   // bool(true)
var_dump($b === $c);  // bool(true)

