<?php


//ЗАДАЧА 1 Подсчет суммы элементов массива

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];

// Вариант 1
$sumFunc = array_sum($nums);
echo "1) С функцией array_sum: $sumFunc\n";

// Вариант 2
$sumManual = 0;
foreach ($nums as $num) {
    $sumManual += $num;
}
echo "2) Без функции (цикл): $sumManual\n\n";



// ЗАДАЧА 2  Подсчет четных чисел в массиве

// Вариант 1
$evenFunc = count(array_filter($nums, function($n) {
    return $n % 2 === 0;
}));
echo "1) С функциями filter + count: $evenFunc\n";

// Вариант 2
$evenManual = 0;
foreach ($nums as $num) {
    if ($num % 2 === 0) {
        $evenManual++;
    }
}
echo "2) Без функций (цикл): $evenManual\n\n";



// ЗАДАЧА 3 Создание массива от 1 до 100


// Вариант 1
$rangeManual = [];
for ($i = 1; $i <= 100; $i++) {
    $rangeManual[] = $i;
}
echo "1) Без функции (цикл): создано " . count($rangeManual) . " элементов\n";

// Вариант 2
$rangeFunc = range(1, 100);
echo "2) С функцией range: создано " . count($rangeFunc) . " элементов\n";

?>