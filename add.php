<?php

include('mysql.php');
include('http.php');

$name = $_POST['name'];
$value = $_POST['value'];

$db = connect();
$sql = "INSERT INTO roles (name,value) VALUES (:name, :value)";
$result = $db->prepare($sql);
$result->execute([
    "name" => $name,
    "value" => $value,
]);

redirect("/index.php");