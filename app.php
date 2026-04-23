<?php

include("vendor/autoload.php");

use Carbon\Carbon;
use App\Calculate\Functions\Add;

echo Carbon::now();
echo "\n";
echo Add::add(1, 2);

print_r($_COOKIE);