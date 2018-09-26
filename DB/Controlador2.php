<?php
    try {
        $pdo = new PDO('mysql:host=127.0.0.1; dbname=sequelize', 'root', '');
        $sql = "SELECT * FROM users";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        require "Vista2.php";
    } catch (PDOException $e){
        die ($e->getMessage());
}