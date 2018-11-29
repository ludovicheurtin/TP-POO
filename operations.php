<?php
session_start();


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
			<tr>
				<td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td class="counterCell"></td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
                <td class="counterCell"></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</body>
</html>