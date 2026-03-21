<?php
// Лабаратория №6

//1
function max_number(int $num): int {
    $digits = str_split((string)$num);
    rsort($digits);
    return (int)implode('', $digits);
}

echo max_number(123);

//2
function no_space(string $str): string {
    return str_replace(' ', '', $str);
}

echo no_space("Hello World");

?>
