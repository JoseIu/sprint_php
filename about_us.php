<?php
    require_once ('./setup.php');
    echo $blade->run("about_us", ["name" => "Joselu"]); // it calls /views/hello.blade.php
?>