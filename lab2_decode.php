<?php

$json = '{"name":"Karl Ardee De Juan","age":20,"email":"karlardeedejuan@gmail.com"}';

$object = json_decode($json);


$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"];

?>
