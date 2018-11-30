<?php
session_start();
 
$host = "localhost";
$port = 3306;
$database = "banque";
$login = "root";
$password = "";
 
try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database",
        $login,
        $password
    );
 


$query = "SELECT id, label, montant FROM operations";
$result = $pdo->query($query);
 
} catch (PDOException $e) {
    //var_dump($e->getMessage());
    var_dump("Pas de connexion à la base de données.");
} finally {
    $pdo = null;
}



?><!DOCTYPE html>
<html>
<head>
    <title>Vos opérations</title>
</head>
<STYLE> A {text-decoration: none;}
        table{border-collapse: collapse;
              width: 1000px;
              text-align: center;
            }
        a{color: black;}
        .square{
                text-align: center;
                width:70px;
                height:20px;
                background:white;
                margin-left: 0px;
                border: solid;                
                border-color: black;
                margin-bottom: 5px;        
        }
        .carre{
                text-align: center;
                width:70px;
                height:20px;
                background: white;
                margin-left: 900px;
                position: absolute;
                top: 8px;
                border: solid;
                border-color: black;
                margin-bottom: 5px;
            }
 
         table {
                counter-reset: tableCount;     
            }
            .counterCell:before {              
                content: counter(tableCount); 
                counter-increment: tableCount;
            }
            .cell{
                width: 100px;
                border: solid;
                border-color: black;
                text-align: center;
            }
            .supr:hover{                animation-name: couleur;
                animation-duration: 0.4s;
                animation-fill-mode: forwards;}
            .supr{
                font-size: 15px;
                border-radius: 10px;
            }
            .cell:hover {
                animation-name: couleurA;
                animation-duration: 0.6s;
                animation-fill-mode: forwards;
            }
            @keyframes couleur {
 
                0% {}
 
                  100% {
                      color: red;
                      font-size: 17px;
                      }
            }
            @keyframes couleurA {
 
                0% {}
 
                  100% {
                    background: red;
                    border-color: red;
                  }
            }
</STYLE>
<body>
    <header>
        <div class="square"><a href="index.php">Retour</a></div>
        <div class="carre"><a href="add-operation.php">Virement</a></div>
    </header>
    <table border="1">
        <thead>
            <tr>
                <th>n°</th>
                <th>libellé</th>
                <th>montant</th>
            </tr>
        </thead>
        <tbody class="css-serial">
			<?php
			$id = 0;
			while($row = $result->fetch()) {
				$id++;
				echo '<tr>
				<td>' . $id . '</td>
			<td>' . $row['label']. '</td>
			<td>' . $row['montant'] . ' € </td>
			</tr>';
			}
			?>
        </tbody>
    </table>
</body>
</html>