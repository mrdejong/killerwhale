<?php


$path = array_key_exists('PATH_INFO', $_SERVER) ? substr($_SERVER['PATH_INFO'], 1) : '';
$method = $_SERVER['REQUEST_METHOD'];

$path = __DIR__."/../actions/$path";
$file = "$path/$method.php";

if (is_dir($path) && file_exists($file)) {
    require $file;
}
