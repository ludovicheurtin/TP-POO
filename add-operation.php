<?php
session_start();
 
function redirection_add_operation() {
    header("Location: add-operation.php");
    die;
}

function redirection_operations() {
    header("Location: operations.php");
    die;
}

$champs=false; 
//Verifier si le formulaire est complet
if(empty($_POST["label"]) or (empty($_POST["montant"]))) {
    echo "Les champs sont obligatoires";
    $champs=false;
}else {
    $champs=true;
}

// Quand formulaire est complet
if ($champs===true) {
    redirection_operations();

    // Vérification si le nom de l'opération n'existe as déjà dans le fichier .csv
    $file = fopen("operations.csv", "r");
    // if($sameop == true) {
    if(isset($_POST["label"])) {
        $label = $_POST["label"];
        $montant = $_POST["montant"];
        $operations = array(
            "label" => $label,
            "montant" => $montant,
        );
        $fp = fopen("operations.csv", "a+");
        fputcsv($fp, $operations);
        fclose($fp);
        redirection_operations();
    }
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
        <?php if(!empty($_SESSION["error"])): ?>
        <p><?php echo $_SESSION["error"] ?></p>
        <?php unset($_SESSION["error"]) ?>
        <?php endif; ?>
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