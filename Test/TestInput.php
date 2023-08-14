<?php

require_once "../Helper/Input.php";

$name = input("name");
echo "Hi $name" . PHP_EOL;
$channel = input("channel");
echo $channel . PHP_EOL;
