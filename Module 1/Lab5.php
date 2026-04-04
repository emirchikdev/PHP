<?php
// Лабаратория #5 - Массивы, встроенные функции (самостоятельная реализация)

//count
function my_count($array) {
    $count = 0;
    foreach ($array as $item) {
        $count++;
    }
    return $count;
}

//array_diff
function my_array_diff($array1, ...$arrays) {
    $result = [];
    foreach ($array1 as $key => $value) {
        $exists = false;
        foreach ($arrays as $compareArray) {
            if (in_array($value, $compareArray)) {
                $exists = true;
                break;
            }
        }
        if (!$exists) $result[$key] = $value;
    }
    return $result;
}

//array_intersect
function my_array_intersect($array1, ...$arrays) {
    $result = [];
    foreach ($array1 as $key => $value) {
        $inAll = true;
        foreach ($arrays as $compareArray) {
            if (!in_array($value, $compareArray)) {
                $inAll = false;
                break;
            }
        }
        if ($inAll) $result[$key] = $value;
    }
    return $result;
}

//array_key_exists
function my_array_key_exists($key, $array) {
    foreach ($array as $k => $v) {
        if ($k === $key) return true;
    }
    return false;
}

//array_keys
function my_array_keys($array) {
    $keys = [];
    foreach ($array as $key => $value) {
        $keys[] = $key;
    }
    return $keys;
}

//array_values
function my_array_values($array) {
    $values = [];
    foreach ($array as $value) {
        $values[] = $value;
    }
    return $values;
}

//array_merge
function my_array_merge(...$arrays) {
    $result = [];
    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            if (is_string($key)) {
                $result[$key] = $value;
            } else {
                $result[] = $value;
            }
        }
    }
    return $result;
}

//array_rand
function my_array_rand($array, $num = 1) {
    $keys = my_array_keys($array);
    $count = my_count($keys);
    
    if ($num == 1) {
        return $keys[rand(0, $count - 1)];
    }
    
    $result = [];
    for ($i = 0; $i < $num; $i++) {
        $result[] = $keys[rand(0, $count - 1)];
    }
    return $result;
}

//array_reverse
function my_array_reverse($array) {
    $reversed = [];
    $keys = my_array_keys($array);
    for ($i = my_count($keys) - 1; $i >= 0; $i--) {
        $key = $keys[$i];
        $reversed[$key] = $array[$key];
    }
    return $reversed;
}

//compact
function my_compact(...$names) {
    $result = [];
    foreach ($names as $name) {
        if (isset($GLOBALS[$name])) {
            $result[$name] = $GLOBALS[$name];
        }
    }
    return $result;
}

//extract
function my_extract(&$array) {
    $count = 0;
    foreach ($array as $key => $value) {
        if (is_string($key) && preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $key)) {
            $GLOBALS[$key] = $value;
            $count++;
        }
    }
    return $count;
}

//arsort
function my_arsort(&$array) {
    $keys = array_keys($array);
    $values = array_values($array);
    $n = count($values);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($values[$j] < $values[$j + 1]) {
                $tmpV = $values[$j];
                $values[$j] = $values[$j + 1];
                $values[$j + 1] = $tmpV;

                $tmpK = $keys[$j];
                $keys[$j] = $keys[$j + 1];
                $keys[$j + 1] = $tmpK;
            }
        }
    }

    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[$keys[$i]] = $values[$i];
    }
    return true;
}

//asort
function my_asort(&$array) {
    $keys = array_keys($array);
    $values = array_values($array);
    $n = count($values);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($values[$j] > $values[$j + 1]) {
                $tmpV = $values[$j];
                $values[$j] = $values[$j + 1];
                $values[$j + 1] = $tmpV;

                $tmpK = $keys[$j];
                $keys[$j] = $keys[$j + 1];
                $keys[$j + 1] = $tmpK;
            }
        }
    }

    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[$keys[$i]] = $values[$i];
    }
    return true;
}

//sort
function my_sort(&$array) {
    $values = array_values($array);
    $n = count($values);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($values[$j] > $values[$j + 1]) {
                $temp = $values[$j];
                $values[$j] = $values[$j + 1];
                $values[$j + 1] = $temp;
            }
        }
    }

    $array = $values;
    return true;
}

//rsort
function my_rsort(&$array) {
    $values = array_values($array);
    $n = count($values);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($values[$j] < $values[$j + 1]) {
                $temp = $values[$j];
                $values[$j] = $values[$j + 1];
                $values[$j + 1] = $temp;
            }
        }
    }

    $array = $values;
    return true;
}

?>>