<?php

$fileName = basename(__FILE__);
$lineNumber = __LINE__;

echo "Имя файла >>> " . $fileName . "<br>" . "Номер строки >>> " . $lineNumber . "<br><br>";

$str = <<<MY
heredoc - синтаксис
MY;

echo $str . "<br><br>";


$a="Рыба";

$b="человек";

echo "$a рыбою сыта, а $b человеком";

?>
