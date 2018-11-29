<?php
session_start();
 
$champs=true;
$label=true;
$montant=true;
 
 
//Verifier si le formulaire est complet
if(empty($_POST["label"]) or (empty($_POST["montant"]))) {
    echo "Les champs sont obligatoire";
    $champs=false;
    $label=false;
    $montant=false;
}else {
    $champs=true;
    $label=true;
    $montant=true;
}

// Quand formulaire est complet
if (($champs===true) && ($label===true) && ($montant===true)) {
    header("location: operations.php");
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
                <input type="number" name="montant" placeholder="Saisir un montant">
            </div>
            <button type="submit" name="btn">OK</button>
        </form>
        
    </body>
</html>