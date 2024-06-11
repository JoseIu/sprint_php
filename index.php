
<?php
require_once('./BladeOne.php');
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
echo $blade->run("index",["name"=>"Joselu"]); // it calls /views/hello.blade.php

?>
