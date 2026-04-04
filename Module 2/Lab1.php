<?php

// 1
$fruits_array = array(
    "fruits" => array("a" => "апельсин", "b" => "банан", "c" => "яблоко"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("первый", 5 => "второй", "третий")
);
print_r($fruits_array);


$myArray = array(
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
);

// 2

$res1 = array_all($myArray, function($value) {
    $len = strlen($value);
    if($len < 12){
        return true;
    } else {
        return false;
    }
});
var_dump($res1);

$res2 = array_all($myArray, function($value) {
    $len = strlen($value);
    if($len > 5){
        return true;
    } else {
        return false;
    }
});
var_dump($res2);

$res3 = array_all($myArray, function($value, $key) {
    if(is_string($key) == true){
        return true;
    } else {
        return false;
    }
});
var_dump($res3);

// 3

$myArray2 = array(
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
);

$check1 = array_any($myArray2, function($value) {
    $length = strlen($value);
    return $length > 5;
});
var_dump($check1);

$check2 = array_any($myArray2, function($value) {
    $length = strlen($value);
    return $length < 3;
});
var_dump($check2);

$check3 = array_any($myArray2, function($value, $key) {
    $result = !is_string($key);
    return $result;
});
var_dump($check3);

// 4

$input_array = array("FirSt" => 1, "SecOnd" => 4);
$upperResult = array_change_key_case($input_array, CASE_UPPER);
print_r($upperResult);

// 5

$input_array2 = array('a', 'b', 'c', 'd', 'e');
$chunked1 = array_chunk($input_array2, 2);
$chunked2 = array_chunk($input_array2, 2, true);
print_r($chunked1);
print_r($chunked2);

// 6

$records = array();
$records[0] = array('id' => 2135, 'first_name' => 'John',  'last_name' => 'Doe');
$records[1] = array('id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith');
$records[2] = array('id' => 5342, 'first_name' => 'Jane',  'last_name' => 'Jones');
$records[3] = array('id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe');

$first_names = array_column($records, 'first_name');
print_r($first_names);

// 7

$keys_arr = array('green', 'red', 'yellow');
$vals_arr = array('avocado', 'apple', 'banana');
$combined_arr = array_combine($keys_arr, $vals_arr);
print_r($combined_arr);

// 8

$myArr = array(1, "hello", 1, "world", "hello");
$counted = array_count_values($myArr);
print_r($counted);

// 9

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$diffResult = array_diff($array1, $array2);
print_r($diffResult);

// 10

$arr1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$arr2 = array("a" => "green", "yellow", "red");
$diffAssocResult = array_diff_assoc($arr1, $arr2);
print_r($diffAssocResult);

// 11

$arrOne = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$arrTwo = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
$diffKeyResult = array_diff_key($arrOne, $arrTwo);
var_dump($diffKeyResult);

// 12

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    if ($a > $b) {
        return 1;
    } else {
        return -1;
    }
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);

// 13

function key_compare_func_new($key1, $key2)
{
    if ($key1 == $key2) {
        return 0;
    } else if ($key1 > $key2) {
        return 1;
    } else {
        return -1;
    }
}

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
$uKeyResult = array_diff_ukey($array1, $array2, 'key_compare_func_new');
var_dump($uKeyResult);

// 15

$startIndex = 5;
$num = 6;
$fillValue = 'банан';
$a = array_fill($startIndex, $num, $fillValue);
print_r($a);

// 16

$keys = array('foo', 5, 10, 'bar');
$defaultValue = 'banana';
$a = array_fill_keys($keys, $defaultValue);
print_r($a);

// 17

function odd($var)
{
    $isOdd = $var % 2 != 0;
    return $isOdd;
}

function even($var)
{
    $isEven = $var % 2 == 0;
    return $isEven;
}

$array1 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

$oddNumbers = array_filter($array1, "odd");
echo "Нечётные:\n";
print_r($oddNumbers);

$evenNumbers = array_filter($array2, "even");
echo "Чётные:\n";
print_r($evenNumbers);

// 18

$animals = array(
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
);

$found1 = array_find($animals, function($value) {
    $len = strlen($value);
    if ($len > 4) {
        return true;
    }
    return false;
});
var_dump($found1);

$found2 = array_find($animals, function($value) {
    $firstChar = $value[0];
    if ($firstChar == 'f') {
        return true;
    }
    return false;
});
var_dump($found2);

$found3 = array_find($animals, function($value, $key) {
    return $value[0] === $key;
});
var_dump($found3);

$found4 = array_find($animals, function($value, $key) {
    $match = preg_match('/^([a-f])$/', $key);
    return $match;
});
var_dump($found4);

// 19

$animals2 = array(
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
);

$foundKey1 = array_find_key($animals2, function($value) {
    return strlen($value) > 4;
});
var_dump($foundKey1);

$foundKey2 = array_find_key($animals2, function($value) {
    return $value[0] == 'f';
});
var_dump($foundKey2);

$foundKey3 = array_find_key($animals2, function($value, $key) {
    return $value[0] === $key;
});
var_dump($foundKey3);

$foundKey4 = array_find_key($animals2, function($value, $key) {
    return preg_match('/^([a-f])$/', $key);
});
var_dump($foundKey4);

// 20

$myArr2 = array(1 => 'a', 0 => 'b', 3 => 'c', 2 => 'd');
$firstValue = array_first($myArr2);
var_dump($firstValue);

// 21

$inputArr = array("oranges", "apples", "pears");
$flippedArr = array_flip($inputArr);
print_r($flippedArr);

// 22

$arr1 = array("a" => "green", "red", "blue");
$arr2 = array("b" => "green", "yellow", "red");
$intersectResult = array_intersect($arr1, $arr2);
print_r($intersectResult);

// 23

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);

// 24

$a1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$a2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
$intersectKeyResult = array_intersect_key($a1, $a2);
var_dump($intersectKeyResult);

// 25

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
$uassocResult = array_intersect_uassoc($array1, $array2, "strcasecmp");
print_r($uassocResult);

// 26

function myKeyCompare($key1, $key2)
{
    if ($key1 == $key2) {
        return 0;
    } else if ($key1 > $key2) {
        return 1;
    } else {
        return -1;
    }
}

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
$uKeyIntersect = array_intersect_ukey($array1, $array2, 'myKeyCompare');
var_dump($uKeyIntersect);

// 27

$emptyArr = array();
var_dump(array_is_list($emptyArr));

$listArr1 = array('apple', 2, 3);
var_dump(array_is_list($listArr1));

$listArr2 = array(0 => 'apple', 'orange');
var_dump(array_is_list($listArr2));

$notList1 = array(1 => 'apple', 'orange');
var_dump(array_is_list($notList1));

$notList2 = array(1 => 'apple', 0 => 'orange');
var_dump(array_is_list($notList2));

$notList3 = array(0 => 'apple', 'foo' => 'bar');
var_dump(array_is_list($notList3));

$notList4 = array(0 => 'apple', 2 => 'bar');
var_dump(array_is_list($notList4));

// 28

$searchArray = array('first' => 1, 'second' => 4);
$keyExistsResult = array_key_exists('first', $searchArray);
var_dump($keyExistsResult);

// 29

$myArray3 = array('a' => 1, 'b' => 2, 'c' => 3);
$firstKey = array_key_first($myArray3);
var_dump($firstKey);

// 30

function _array_key_last(array $array) {
    if (!empty($array)) {
        $allKeys = array_keys($array);
        $lastIndex = count($allKeys) - 1;
        return $allKeys[$lastIndex];
    } else {
        return null;
    }
}
var_dump(_array_key_last(array('PHP', 'Javascript', 'Python')));

// 31

$arr = array(0 => 100, "color" => "red");
$keysResult1 = array_keys($arr);
print_r($keysResult1);

$arr2 = array("blue", "red", "green", "blue", "blue");
$keysResult2 = array_keys($arr2, "blue");
print_r($keysResult2);

$arr3 = array(
    "color" => array("blue", "red", "green"),
    "size" => array("small", "medium", "large")
);
$keysResult3 = array_keys($arr3);
print_r($keysResult3);

// 32

$myArr3 = array(1 => 'a', 0 => 'b', 3 => 'c', 2 => 'd');
$lastValue = array_last($myArr3);
var_dump($lastValue);

// 33

function cube($n)
{
    $result = $n * $n * $n;
    return $result;
}

$numbersArr = array(1, 2, 3, 4, 5);
$cubedArr = array_map('cube', $numbersArr);
print_r($cubedArr);

// 34

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedResult = array_merge($array1, $array2);
print_r($mergedResult);

// 35

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$recursiveMerge = array_merge_recursive($ar1, $ar2);
print_r($recursiveMerge);

// 36

$sortArr1 = array(10, 100, 100, 0);
$sortArr2 = array(1, 3, 2, 4);
array_multisort($sortArr1, $sortArr2);
var_dump($sortArr1);
var_dump($sortArr2);

// 37

$inputPad = array(12, 10, 9);

$padResult1 = array_pad($inputPad, 5, 0);
echo join(', ', $padResult1);
echo "\n";

$padResult2 = array_pad($inputPad, -7, -1);
echo join(', ', $padResult2);
echo "\n";

$padResult3 = array_pad($inputPad, 2, "noop");
echo join(', ', $padResult3);
echo "\n";

// 38

$stackArr = array("orange", "banana", "apple", "raspberry");
$poppedFruit = array_pop($stackArr);
print_r($stackArr);

// 39

$numArr = array(2, 4, 6, 8);
$productResult = array_product($numArr);
echo "product(a) = " . $productResult . "\n";
$emptyProduct = array_product(array());
echo "product(array()) = " . $emptyProduct . "\n";

// 40

$stackArr2 = array("orange", "banana");
array_push($stackArr2, "apple", "raspberry");
print_r($stackArr2);

// 41

$namesArr = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$randKeys = array_rand($namesArr, 2);
$name1 = $namesArr[$randKeys[0]];
$name2 = $namesArr[$randKeys[1]];
echo $name1 . "\n";
echo $name2 . "\n";

// 42

function sum($carry, $item)
{
    $carry = $carry + $item;
    return $carry;
}

function product($carry, $item)
{
    $carry = $carry * $item;
    return $carry;
}

$numsArr = array(1, 2, 3, 4, 5);
$emptyArr2 = array();

$sumResult = array_reduce($numsArr, "sum");
var_dump($sumResult);

$productResult2 = array_reduce($numsArr, "product", 10);
var_dump($productResult2);

$noDataResult = array_reduce($emptyArr2, "sum", "Нет данных");
var_dump($noDataResult);

// 43

$baseArr = array("апельсин", "банан", "яблоко", "малина");
$replacements1 = array(0 => "ананас", 4 => "вишня");
$replacements2 = array(0 => "виноград");
$basket = array_replace($baseArr, $replacements1, $replacements2);
var_dump($basket);

// 44

$baseArr2 = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"));
$replacementsArr = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basketRecursive = array_replace_recursive($baseArr2, $replacementsArr);
print_r($basketRecursive);

$basketNormal = array_replace($baseArr2, $replacementsArr);
print_r($basketNormal);

// 45

$inputReverse = array("php", 4.0, array("green", "red"));
$reversedArr = array_reverse($inputReverse);
$preservedArr = array_reverse($inputReverse, true);

print_r($inputReverse);
print_r($reversedArr);
print_r($preservedArr);

// 46

$searchArr = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$greenKey = array_search('green', $searchArr);
print_r($greenKey);

$redKey = array_search('red', $searchArr);
print_r($redKey);

// 47

$stackArr3 = array("orange", "banana", "apple", "raspberry");
$shiftedFruit = array_shift($stackArr3);
print_r($stackArr3);

// 48

$inputSlice = array("a", "b", "c", "d", "e");

$slice1 = array_slice($inputSlice, 2);
$slice2 = array_slice($inputSlice, -2, 1);
$slice3 = array_slice($inputSlice, 0, 3);

$slice4 = array_slice($inputSlice, 2, -1);
print_r($slice4);

$slice5 = array_slice($inputSlice, 2, -1, true);
print_r($slice5);

// 49

$inputSplice = array("red", "green", "blue", "yellow");
array_splice($inputSplice, 2);
var_dump($inputSplice);

$inputSplice = array("red", "green", "blue", "yellow");
array_splice($inputSplice, 1, -1);
var_dump($inputSplice);

$inputSplice = array("red", "green", "blue", "yellow");
$inputSpliceCount = count($inputSplice);
array_splice($inputSplice, 1, $inputSpliceCount, "orange");
var_dump($inputSplice);

$inputSplice = array("red", "green", "blue", "yellow");
array_splice($inputSplice, -1, 1, array("black", "maroon"));
var_dump($inputSplice);

// 50

$sumArr1 = array(2, 4, 6, 8);
$sum1 = array_sum($sumArr1);
echo "sum(a) = " . $sum1 . "\n";

$sumArr2 = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
$sum2 = array_sum($sumArr2);
echo "sum(b) = " . $sum2 . "\n";

// 51

$obj1 = new stdClass();
$obj2 = new stdClass();
$obj3 = new stdClass();
$obj4 = new stdClass();
$array1 = array($obj1, $obj2, $obj3, $obj4);

$obj5 = new stdClass();
$obj6 = new stdClass();
$array2 = array($obj5, $obj6);

$array1[0]->width = 11; $array1[0]->height = 3;
$array1[1]->width = 7;  $array1[1]->height = 1;
$array1[2]->width = 2;  $array1[2]->height = 9;
$array1[3]->width = 5;  $array1[3]->height = 7;

$array2[0]->width = 7;  $array2[0]->height = 5;
$array2[1]->width = 9;  $array2[1]->height = 2;

function compare_by_area($a, $b) {
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;
    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB) {
        return 1;
    } else {
        return 0;
    }
}

$udiffResult = array_udiff($array1, $array2, 'compare_by_area');
print_r($udiffResult);

// 52

class cr {
    public $priv_member;
    function __construct($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) {
            return 0;
        }
        if ($a->priv_member > $b->priv_member) {
            return 1;
        } else {
            return -1;
        }
    }
}

$crArr1 = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15));
$crArr2 = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3),  1 => new cr(4), 2 => new cr(-15));

$udiffAssocResult = array_udiff_assoc($crArr1, $crArr2, array("cr", "comp_func_cr"));
print_r($udiffAssocResult);

// 53

class cr2
{
    public $priv_member;
    function __construct($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) {
            return 0;
        }
        if ($a->priv_member > $b->priv_member) {
            return 1;
        } else {
            return -1;
        }
    }

    static function comp_func_key($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        if ($a > $b) {
            return 1;
        } else {
            return -1;
        }
    }
}

$crArr3 = array("0.1" => new cr2(9), "0.5" => new cr2(12), 0 => new cr2(23), 1 => new cr2(4),  2 => new cr2(-15));
$crArr4 = array("0.2" => new cr2(9), "0.5" => new cr2(22), 0 => new cr2(3),  1 => new cr2(4),  2 => new cr2(-15));

$udiffUassocResult = array_udiff_uassoc($crArr3, $crArr4, array("cr2", "comp_func_cr"), array("cr2", "comp_func_key"));
print_r($udiffUassocResult);

// 54

$arr1_54 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$arr2_54 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
$uintersectResult = array_uintersect($arr1_54, $arr2_54, "strcasecmp");
print_r($uintersectResult);

// 55

$arr1_55 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$arr2_55 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
$uintersectUassocResult = array_uintersect_uassoc($arr1_55, $arr2_55, "strcasecmp", "strcasecmp");
print_r($uintersectUassocResult);

// 56

$inputUnique = array("a" => "green", "red", "b" => "green", "blue", "red");
$uniqueResult = array_unique($inputUnique);
print_r($uniqueResult);

// 57

$queueArr = array("orange", "banana");
array_unshift($queueArr, "apple", "raspberry");
var_dump($queueArr);

// 58

$valuesArr = array("size" => "XL", "color" => "gold");
$valuesResult = array_values($valuesArr);
print_r($valuesResult);

// 59

$fruitsWalk = array("d" => "лимон", "a" => "апельсин", "b" => "банан", "c" => "яблоко");

function test_alter(&$item1, $key, $prefix)
{
    $newValue = $prefix . ": " . $item1;
    $item1 = $newValue;
}

function test_print($item2, $key)
{
    $output = $key . ". " . $item2 . "\n";
    echo $output;
}

echo "До:…\n";
array_walk($fruitsWalk, 'test_print');

array_walk($fruitsWalk, 'test_alter', 'фрукт');
echo "\n…и после:\n";
array_walk($fruitsWalk, 'test_print');

// 60

$sweetArr = array('a' => 'яблоко', 'b' => 'банан');
$fruitsNested = array('sweet' => $sweetArr, 'sour' => 'лимон');

function test_print_recursive($item, $key)
{
    $msg = "Ключ '" . $key . "' содержит значение: " . $item . "\n";
    echo $msg;
}

array_walk_recursive($fruitsNested, 'test_print_recursive');