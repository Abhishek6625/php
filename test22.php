<?php

$food = array('orange','banana','apple', 'mango');

$veg =['carrot', 'pea'];

$newArray = array_replace($food , $veg);


echo "<pre>";
print_r($newArray);
echo "</pre>";

?>