<?php
session_start();
 
$host = "localhost";
// Pensez à vérifier que le port ci-dessous correspond à celui de votre base de données
$port = 3701;
$database = "banque";
$login = "root";
$password = "";
 
try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database",
        $login,
        $password
    );
    if(isset($_POST["crdb"])) {
        $pdo->exec("DROP DATABASE IF EXISTS banque; CREATE DATABASE banque; USE banque; CREATE TABLE operations(id INT(6) AUTO_INCREMENT PRIMARY KEY, label VARCHAR(30) NOT NULL, montant INT(10) NOT NULL );");}
} catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo("Pas de connexion à la base de données. Merci d'utiliser cette requête SQL pour la créer : CREATE DATABASE banque; USE banque; CREATE TABLE operations(id INT(6) AUTO_INCREMENT PRIMARY KEY, label VARCHAR(30) NOT NULL, montant INT(10) NOT NULL );");
} finally {
    $pdo = null;
}
if(isset($_POST["operation"])) {
    header("Location: operations.php");
        die;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<STYLE>
    header, form{
        text-align: center;
    }
    button{
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: white;
        border-color: #4a9b9d;
        border-radius: 10px;
        background-color: #4a9b9d;
    }
    h1{
        font-size: 60px;
    }
    h2{
        font-weight: normal;
        font-size: 40px;
    }
</STYLE>
<body>
    <header>
        <h1>Accueil</h1>
    </header>
    <form action="" method="post">
        <h2>Mes opérations</h2>
        <button type="submit" name="operation">OK</button>
    </form>
    <br>
    <form action="" method="post">
        <button type="submit" name="crdb">Réinitialiser la base de données</button>
    </form>
</body>
</html>