<?php

namespace Helpers;

class HTTP
{
    static $base = "http://localhost/e-commerce/project";

    static function redirect($path, $query = "")
    {
        $url = static::$base . $path;
        if ($query)
            $url .= "?$query";
        header("Location: $url");
        exit();
    }
}