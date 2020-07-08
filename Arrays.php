<?php
/*
 * Return the values from a single column in the input array
 *
 */
if (!function_exists('array_column')) {
    function array_column($array, $column_name) {
        return array_map(function($element) use($column_name) {return $element[$column_name];}, $array);
    }
}


// Example
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$first_names = array_column($records, 'first_name');
print_r($first_names);


/*
 * Return if array is multi-dimensional or not
 */
function isMultiArray($a) {
    foreach($a as $v) return is_array($v) ? true : false;
}

print_r(isMultiArray($records));

?>
