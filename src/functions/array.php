<?php

$arr = [
    ['a','b','c'],
    ['d','e','f']
];

/* ---------------------- ARRAY MAP (apply a callback to all the elements inside the sub arrays) ---------------------------- */ 

var_export(
    array_map(
        function($element)
        {
            return implode(",", $element); 
        },
        $arr
    )
);

/*
Output:
array (
  0 => 'a,b,c',
  1 => 'd,e,f',
)
*/

$arr = [
    'foo' => 'bar',
    'baz' => 'qux'
];
var_export(
    array_map(
        function($key, $value)
        {
            return "$key=$value";
        },
        array_keys($arr),
        array_values($arr)
    )
);
/*
Output:
array (
  0 => 'foo=bar',
  1 => 'baz=qux',
)
*/

var_export(
    implode(
        PHP_EOL,
        array_map(
            function($element)
            {
                return implode(", ", $element);
            },
            $arr
        )
    )
);

/*
Output:
a, b, c
d, e, f
*/

/* ---------------------- CALL_USER_FUNC_ARRAY (apply a callback to all the elements) ---------------------------- */ 

print_r(
    implode(
        ",\n", 
        call_user_func_array('array_merge', $arr)
    )
);

/*
Output:
a,
b,
c,
d,
e,
f
*/

/* ---------------------- ARRAY_UNSHIFT (add at the begining of the array) ---------------------------- */ 
$array = ['two', 'three'];
array_unshift($array, 'zero', 'one');
print_r($array);

/* 
Output:
array
(
    [0] => zero
    [1] => one
    [2] => two
    [3] => three
)
 */

/* ---------------------- ARRAY_SHIFT (remove the first element at the begining of the array) ---------------------------- */ 
$array = ['one', 'two', 'three'];
$removedElement = array_shift($array);
print_r($removedElement); // one
print_r($array);

/* 
output:
array
(
    [0] => two
    [1] => three
)
 */

/* ---------------------- ARRAY_COMBINE (creates an array by using one array for keys and another for its values) ---------------------------- */ 
$arrayLetters = ['one', 'two', 'three'];
$arrayNumbers = [1, 2, 3];
$arrayLettersWithNumbers = array_combine(
    /* keys   */ $arrayLetters,
    /* values */ $arrayNumbers
);
print_r($arrayLettersWithNumbers); 
/* 
output:
array
(
    ['one'] => 1 
    ['two'] => 2 
    ['three'] => 3 
)
 */

/* ---------------------- ARRAY_COLUMN (return the values from a single column in the input array) ---------------------------- */ 
$arr = [
    ['id' => 123],
    ['id' => 456]
];
var_export(array_column($arr, 'id'));
/*
output:
array (
  0 => 123,
  1 => 456,
)
*/
