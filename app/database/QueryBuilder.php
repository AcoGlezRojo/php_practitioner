<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        if (!is_null($class)) {
            return $statement->fetchAll(PDO::FETCH_CLASS, 'Models\\' . $class);
        }
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ',  array_keys($parameters)),
            ':' . implode(', :',  array_keys($parameters))
        );

        // die(var_dump($sql));

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Whoops, something went wrong');
        }
    }
}
