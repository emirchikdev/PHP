<?php
// Лабаратория №6

//1
function str_count($str, $substr): int {
    return substr_count($str, $substr);
}

echo str_count('hello', 'l'); 

//2
function max_number(int $num): int {
    $digits = str_split((string)$num);
    rsort($digits);
    return (int)implode('', $digits);
}

echo max_number(123);

//3
function no_space(string $str): string {
    return str_replace(' ', '', $str);
}

echo no_space("Hello World");

?>
