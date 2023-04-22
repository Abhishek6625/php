<?php

function display($number){
    if($number<= 10){
        echo "$number <br>";
        display($number +1);
    }
}
display(1);


?>