<?php


return [
    "database" => [
        "name" => "sales",
        "password" => "zan3tkabjs",
        "connection" => "pgsql:host=127.0.0.1",
        "username" => "postgres",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];