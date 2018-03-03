/*
 * Return the values from a single column in the input array
 * See http://php.net/manual/en/function.array-column.php
 */
if(!function_exists("array_column")) {
    function array_column($array, $column_name) {
        return array_map(function($element) use($column_name){ return $element[$column_name]; }, $array);
    }
}


/*
 * Return if array is multi-dimensional or not 
 * @Param array.
 */
function isMultiArray($a) {
    foreach($a as $v) if(is_array($v)) return TRUE;
    return FALSE;
}
