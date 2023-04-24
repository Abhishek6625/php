<?php

$color =['red','green','blue','yellow','brown'];

// $newArray = array_slice($color, 1, 2);

  $newArray = array_splice($color ,2 );

echo '<pre>';
print_r($newArray);
echo '</pre>';

?>