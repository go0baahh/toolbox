<?php

/**
 * Return the values from a column
 */
function array_column($array, $column_name) {
    return array_map(function($element) use($column_name) { 
        return $element[$column_name]; 
    }, $array);
}


/**
 * Return if array is multi-dimensional or not
 */
function isMultiArray($a) {
    foreach($a as $v) return is_array($v) ? true : false;
}

?>
