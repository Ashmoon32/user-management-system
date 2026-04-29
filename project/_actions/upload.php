<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();

$table = new UsersTable(new MySQL());


$name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
    HTTP::redirect("/profile.php", "error=file");
}

if ($type === 'image/jpeg' || $type === 'image/png') {
    $table->updatePhoto($auth->id, $name);
    move_uploaded_file($tmp_name, "photos/$name");
    $auth->photo = $name;
    HTTP::redirect("/profile.php");
} else {
    // header("Location: ../profile.php?error=type");
    HTTP::redirect("/profile.php", "error=type");
}