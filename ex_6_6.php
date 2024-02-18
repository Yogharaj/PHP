<?php
$string = "apple,banana,orange";
$array = explode(",", $string);
print_r($array);
$array = array("apple", "banana", "orange");
$string = implode(",", $array);
echo $string;
?>