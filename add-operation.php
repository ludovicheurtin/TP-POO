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
 
$host = "localhost";
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
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Verifier si le formulaire est complet
    $champs=false;
    if(empty($_POST["label"]) or (empty($_POST["montant"]))) {
        echo "Les champs sont obligatoires";
        $champs=false;
    }else {
        $champs=true;
    }

    // Quand formulaire est complet
    if ($champs===true) {
        $stmt = $pdo->prepare("INSERT INTO operations(label, montant) VALUES (:unLabel, :unMontant);");
        $stmt->bindParam(':unLabel', $label);
        $label = $_POST["label"];
        $stmt->bindParam(':unMontant', $montant);
        $montant = $_POST["montant"];
        $stmt->execute();
    }
}
finally {
    $pdo = null;
}
if (isset($_POST["btn"]) && $champs===true) {
    redirection_operations();
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