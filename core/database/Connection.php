<?php
// namespace App\Core\Database;

class Connection
{
    public static function make($config)
    {
        try {
            // return new PDO('pgsql:host=127.0.0.1;dbname=sales;', 'postgres', 'zan3tkabjs', []);
            return new PDO(
                $config["connection"]. ";dbname=" . $config["name"],
                $config["username"],
                $config["password"],
                $config["options"]
            );

        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}