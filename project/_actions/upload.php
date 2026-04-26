<?php

$error = $_FILES['photo']['error'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error !== 0) {
    header("Location: ../profile.php?error=file");
    exit();
}

if ($type === 'image/jpeg' || $type === 'image/png') {
    move_uploaded_file($tmp_name, "../_actions/photos/profile.jpg");
    header("Location: ../profile.php");
} else {
    header("Location: ../profile.php?error=type");
    exit();
}