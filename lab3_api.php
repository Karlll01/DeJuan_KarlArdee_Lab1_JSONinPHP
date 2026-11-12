<?php

header('Content-Type: application/json');

$user = array(
    "id" => 24174980,
    "name" => "Karl Ardee De Juan",
    "email" => "karlardeedejuan@gmail.com",
    "status" => "active"
);

echo json_encode($user);

?>
