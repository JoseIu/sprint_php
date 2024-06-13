<?php
// require_once('./conectDb.php');
require_once('./setup.php');
conectDB();
echo $blade->run("index", ["name" => "Joselu"]);
