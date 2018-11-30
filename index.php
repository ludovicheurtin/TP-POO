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
</body>
</html>