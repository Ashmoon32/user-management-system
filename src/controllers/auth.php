<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
}