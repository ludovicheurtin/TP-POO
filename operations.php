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
				<td>1</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>2</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>3</td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td>4</td>
				<td></td>
				<td></td>
			</tr>
						<tr>
				<td>5</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>6</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>7</td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td>8</td>
				<td></td>
				<td></td>
			</tr>
						<tr>
				<td>9</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>10</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>11</td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td>12</td>
				<td></td>
				<td></td>
			</tr>
						<tr>
				<td>13</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>14</td>
				<td></td>
				<td></td>				
			</tr>
			<tr>
				<td>15</td>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td>16</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</body>
</html>