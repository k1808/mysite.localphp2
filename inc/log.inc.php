<?
$dt = date("H-i-s d-m-Y", time());
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = "$dt | $page | $ref \n";
echo $path;

$f = fopen(PATH_LOG, "a");
fputs($f, $path);
fclose($f);

