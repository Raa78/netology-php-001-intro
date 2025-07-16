<?php

$choice = array(
    "boolean" => "bool",
    "double" => "float",
    "integer" => "int",
    "string" => "string",
    "null" => "null",
    "array" => "other",
    "object" => "other",
    "resource" => "other",
);


function variableTypeDefinition($value) {
    $check = gettype($value);

    return $check;
}


function outputType($value) {
    global $choice;

    $variableType = variableTypeDefinition($value);

    $key = strtolower(strval($variableType));

    return $choice[$key];
}


// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
$variable = [];

echo  "type is " . outputType($variable);

?>
