<?php
echo "var json".$type." = ";

$a = file_get_contents("http://eire-media.com/gauge/?type=".$type);

echo $a;

?>