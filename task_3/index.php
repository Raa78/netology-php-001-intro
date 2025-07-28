<?php
$resultForIf = NULL;

$resultForSwitch = NULL;

// $variable = true;
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
$variable = null;
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


switch ($variable) {
    case is_null($variable) === 1 && !isset($variable):
        echo "enter is_null" . PHP_EOL;
        $resultForSwitch = 'null';
        break;
    case is_bool($variable):
        echo "enter is_bool" . PHP_EOL;
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
    default:
        $resultForSwitch = 'other';
}

// switch ($variable) {
//     case is_bool($variable) || gettype($variable) !== NULL:
//         echo "enter is_bool" . PHP_EOL;
//         $resultForSwitch = 'bool';
//         break;
// }

echo  "type is " . $resultForSwitch . PHP_EOL;

var_dump("gettype>>>" . strval(gettype($variable)) . " / isset>>>" . isset($variable) . " / is_null>>>" . is_null($variable)) . PHP_EOL;
var_dump(gettype($variable) === "NULL");
?>
