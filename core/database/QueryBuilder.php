<?php

class QueryBuilder
{
    public $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO cars (%s) VALUES (%s)',
            implode(', ', array_keys($parameters)),
            ':'. implode(', :', array_keys($parameters)),
        );

        try {
            $statement =$this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die('Whopps, something went wrong');
        }

    }
}