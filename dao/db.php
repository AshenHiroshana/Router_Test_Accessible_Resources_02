<?php
    $host = "localhost";
    $uname = "root";
    $pwd = "1234";
    $db = "routertest";
    $charset = 'utf8mb4';
    $dbstring = 'mysql:host='.$host.';dbname='.$db.';charset='.$charset;
    $con = new PDO($dbstring,$uname,$pwd);
?>