<?php

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die('could not connect. ' . $e->getMessage());
    }
}

function getAllTaskt($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dumper($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
