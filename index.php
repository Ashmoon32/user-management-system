<?php

include('autoload.php');

use App\Calculate\Functions\Add;
use App\Calculate\Functions\Subtract;
use App\Card\Header;

$header = new Header();
echo $header->header();

echo Add::add(1, 2);
echo Subtract::subtract(1, 2);

setcookie("name", "Ashmoon", time() - 1);
setcookie("theme", "dark");

echo "See at app.php";