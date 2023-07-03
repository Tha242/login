<?php

function redirect ($path, $query = "") {
    $base = "http://localhost/theinPj";
    $url = $base . $path;
    if($path) $url .= "?$query";
    header("location: $url");
    exit();
} 