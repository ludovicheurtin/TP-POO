<?php
session_start();
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
    header{
        text-align: center;
    }
    button{
        color: white;
        border-color: #4a9b9d;
        border-radius: 10px;
        background-color: #4a9b9d;
    }
</STYLE>
<body>
    <header>
        <h1>Accueil</h1>
    </header>
    <form action="" method="post">
        Mes opérations
        <button type="submit" name="operation">OK</button>
    </form>
</body>
</html>