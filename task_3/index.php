<?php
$resultForIf = NULL;

$resultForSwitch = NULL;

// $variable = true;
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = null;
// $variable = [];


if (is_bool($variable)) {
    $resultForIf = 'bool';
} elseif (is_float($variable)) {
    $resultForIf = 'float';
} elseif (is_int($variable)) {
    $resultForIf = 'int';
} elseif (is_string($variable)) {
    $resultForIf = 'string';
} elseif (is_null($variable)) {
    $resultForIf = 'null';
} else {
     $resultForIf = 'other';
}

echo  "type is " . $resultForIf . PHP_EOL;


switch (true) {
    case is_bool($variable):
        $resultForSwitch = 'bool';
        break;
    case is_float($variable):
        $resultForSwitch = 'float';
        break;
    case is_int($variable):
        $resultForSwitch = 'int';
        break;
    case is_string($variable):
        $resultForSwitch = 'string';
        break;
    case is_null($variable):
        $resultForSwitch = 'null';
        break;
    default:
        $resultForSwitch = 'other';
}

echo  "type is " . $resultForSwitch . PHP_EOL;

?>
