<?php
$fruits = array("apple", "banana");
array_push($fruits, "orange", "grape");
print_r($fruits);
$lastFruit = array_pop($fruits);
echo "Removed fruit: $lastFruit <br>";
$firstFruit = array_shift($fruits);
echo "Removed fruit: $firstFruit <br>";
array_unshift($fruits, "pear", "kiwi");
print_r($fruits);
$moreFruits = array("pineapple", "strawberry");
$allFruits = array_merge($fruits, $moreFruits);
print_r($allFruits); 
$slicedFruits = array_slice($allFruits, 2, 3);
print_r($slicedFruits);
$keyExists = array_key_exists(1, $allFruits);
echo "Key 1 exists in array: " . ($keyExists ? 'Yes' : 'No') . "<br>"; 
$key = array_search("banana", $allFruits);
echo "Key for 'banana': $key <br>";
$reversedFruits = array_reverse($allFruits);
print_r($reversedFruits);
$duplicateFruits = array("apple", "banana", "orange", "banana", "apple");
$uniqueFruits = array_unique($duplicateFruits);
print_r($uniqueFruits);
?>
