<?php
    function server_info($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    function uri_active($uri){
        echo $_SERVER["REQUEST_URI"] === $uri ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" ;
    };

    // server_info($_SERVER);