<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

if ($auth->value > 1) {
    $id = $_GET['id'];
    $table->delete($id);
    HTTP::redirect('/admin.php');
} else {
    $table->suspend($auth->id);
    session_destroy();
    HTTP::redirect('/index.php', 'suspended=1');
    exit();
}