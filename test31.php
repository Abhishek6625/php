<?php
echo 'Time $ Date : '.date("d/m/Y h:i:sA"). '<br><br>';

echo date("d/m/Y h:i:sA",mktime(0,0,0,4, 24 ,2023)).'<br><br>';

echo date("d/m/Y h:i:sA", gmmktime(0,0,0,4, 24 ,2023));



?>