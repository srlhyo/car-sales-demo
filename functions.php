<?php
// keep the function we're using over and over

// connection to the database
function connection() {
    try {
        return new PDO('pgsql:host=127.0.0.1;dbname=sales;', 'postgres', 'zan3tkabjs');

    } catch (PDOException $e) {
        dd('Could not connect to the database');
    }
}

// fetch results
function fetchAllRecords($pdo, $className, $table) {

    $statement = $pdo->prepare('SELECT * FROM ' . $table);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, $className);
}

// this is a die and dump function for debugging purporses
function dd($data) {
    echo "<pre>";
    var_dump($data);
    die;
}