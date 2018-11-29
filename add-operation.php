<?php
session_start();
 
$champs=false;
$label=false;
$montant=false;
 

//Verifier si le formulaire est complet
if(!empty($_POST["label"]) && (!empty($_POST["montant"]))) {
    echo "Les champs sont obligatoire";
    $champs=true;
    $label=true;
    $montant=true;
}

var_dump($_POST);
var_dump($champs);
var_dump($label);
var_dump($montant);


// Quand formulaire est complet
if (($champs===true) && ($label===true) && ($montant===true)) {
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
 
        <form action="" method="POST">
            <div>
                <input type="text" name="label" placeholder="Saisir un label">
            </div>
            <br>
            <div>
                <input type="text" name="montant" placeholder="Saisir un montant">
            </div>
        </form>

        <button type="submit" name="btn">OK</button>
    </body>
</html>