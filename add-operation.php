<?php
session_start();
 
// tout les form soit complet sinon pas redirection
 
$champs=true;
$label=true;
$montant=true;
 

//Verifier si le formulaire est complet
if(empty($_POST["label"]) or (empty($_POST["montant"]))) {
    echo "Les champs sont obligatoire";
    $champs=false;
 
}else{
    $champs=true;
    header("location: index.php");
}
 
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajouter opérations</title>
    </head>
 
    <body>
        <header>
            <h1>Ajouter une opération</h1>
        </header>
 
        <form action="" method="post">
            <div>
                <input type="text" name="label" placeholder="Saisir un label">
            </div>
            <br>
            <div>
                <input type="text" name="montant" placeholder="Saisir un montant">
            </div>
        </form>
        
        <button type="submit">OK</button>
 
    </body>
</html>