<?php
	session_start();
	//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="nav-bar">
		<ul>
			<li> <a href="./index.php">Automobil</a></li>
			<li> <a href="../php/istorie.php">Istorie</a></li>
			<li> <a href="../php/componentcar.php">Componente masina</a></li>
			<li> <a href="../php/carfunct.php">Functionarea automobil</a></li>
            <li> <a href="../php/sign_up.php">Sign Up</a></li>
            <li> <a href="../php/contacts.php">Contacts</a></li>
            <li> <a href="../php/sign_in.php">Sign in</a></li>
			<li> <a href="https://ro.wikipedia.org/wiki/Automobil"  target="_blank">Wikipedia</a></li>
			<li<><button id="btn" class="btn">Theme </a></button></li>
		</ul>
	</div>	
		<br>	
		<h1  class="title">
			<strong>
				Automobil  
			</strong>
		</h1>

		<?php
			if(isset($_SESSION['email'])) {
				?>
					Utilizatorul <?=$_SESSION['email']?> este logat <a href="php/logout.php"> Logout </a>
				<?php
			}
			else
			{
				?>
					Nu a fost logat nici un utilizator.
				<?php
			}
		?>

		<div class="block">
			<table class="text">
				<td>
					<h2 id='h2'onclick="slide(mytext,h2)" >Citeste mai putin 🠕</h2>
					<div id="mytext">
					<p id="my-text">
				Automobilul sau mai familiar mașina, este un vehicul cu patru (rar, trei, șase) roți, acționat de un motor cu ardere internă, cu abur, cu electricitate sau aer comprimat. Are scaune pentru conducător și pentru cel puțin un pasager.
				Automobilele sunt de obicei construite pentru a călători pe drumuri, dar există unele, mai ales vehicule utilitare, care permit călătorii în afara drumurilor - (off-road). Drumurile și autostrăzile sunt folosite în comun cu alte vehicule, cum sunt motocicletele și tractoarele.
				Un automobil tipic are un motor cu ardere internă și patru roți, însă au apărut pe piață și mașini cu motoare hibride, cu gaz sau electrice. Au fost construite și autovehicule cu trei roți, dar nu sunt prea răspândite din cauza problemelor de stabilitate.
				În anul 2007 în lume existau aproape 800 de milioane de mașini în circulație (majoritatea în emisfera nordică) iar 42 de milioane de mașini noi erau produse în fiecare an. În anul 2050 se aproximează că vor exista 4 miliarde de automobile la nivel mondial.
				</td>
				 <td>
					 <img src="../img/automobil.jpeg">
				 </td> 
			</table>
		</div>	
		
		<script src="../javascript/java.js"></script>
</body>
</html>