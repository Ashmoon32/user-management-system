<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'ashmoon32@gmail.com' && $password === '123456') {
    $_SESSION['user'] = ["username" => "Ashmoon"];
    header("Location: ../profile.php");
} else {
    header("Location: ../index.php?incorrect=1");
}

