<?php

// $color = ['red','green','blue','yellow','black'];


$color =[
      'first' => 'red',
      'second' => 'green',
      'third' => 'blue',
      'forth' => 'yellow',
      'five' => 'black',

];

// $newArray = array_keys($color);
$newArray = key_exists('six', $color);

if($newArray){
    echo 'key exits!';
}else{
    echo 'key dones not exits!';
}



// echo "<pre>";
// print_r($color);
// echo "</pre>";






?>