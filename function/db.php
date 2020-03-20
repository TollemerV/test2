<?php

function getPDO():PDO
{ 
    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=users","users","D780Ex0y0yR74IxT");
        return $pdo;
    } catch (PDOException $ex)
    { 
        echo "Erreur lors de la connexion à la base de données ";
        die();

    }
}