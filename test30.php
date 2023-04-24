<?php

echo 'Hours is  '.date("h"). "<br>";
echo 'Minutes is  '.date("i"). "<br>";
echo 'second is  '.date("s"). "<br>";
echo 'Meridiem is  '.date("a"). "<br>";
echo 'Meridiem is  '.date("A"). "<br>";
echo 'Time is  '.date("h : i : s A e"). "<br>";
echo 'Time & Date  '.date("d/m/Y h : i : s A"). "<br>";



date_default_timezone_set("Asia/Kolkata");
echo 'Time is  '.date("h : i : s A e"). "<br>";

?>