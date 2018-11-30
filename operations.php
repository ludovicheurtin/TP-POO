<?php
session_start();
 
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
 
// $id=1;
// $pdo-> exec("DELETE FROM operations WHERE id=$id");

$query = "SELECT id, label, montant FROM operations";
$result = $pdo->query($query);
var_dump($result);
 
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
            }
            .cell:hover {
                   animation-name: couleurA;
                animation-duration: 0.6s;
                animation-fill-mode: forwards;
            }
            @keyframes couleur {
 
                0% {}
 
                  100% {
                      color: white;
                      font-size: 20px;
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
                <th></th>
            </tr>
        </thead>
        <tbody class="css-serial">
            <!-- <tr>
                <td class="counterCell"></td>
                <td></td>
                <td></td>
                    <td class="cell">
                        <a href="?delete=<?php echo $index ?>" class="supr">supprimer</a>
                    </td>
            </tr> -->
			<?php
			// 
			while($row = $result->fetch()) 
			{echo '<tr>
				<td>' . $row['id'] . '</td>
			<td>' . $row['label']. '</td>
			<td>' . $row['montant'] . '</td>
			<td class="cell">
                <a href="?delete=<?php echo $index ?>" class="supr">supprimer</a>
			</td>
			</td>';
			}
			?>
        </tbody>
    </table>
</body>
</html>