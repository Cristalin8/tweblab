

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="../css/styleforma.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
    <div class="nav-bar">
		<ul>
			<li> <a href="../index.php">Automobil</a></li>
			<li> <a href="./istorie.php">Istorie</a></li>
			<li> <a href="./componentcar.php">Componente masina</a></li>
			<li> <a href="./carfunct.php">Functionarea automobil</a></li>
            <li> <a href="./sign_up.php">Sign Up</a></li>
            <li> <a href="./contacts.php">Contacts</a></li>
            <li> <a href="./sign_in.php">Sign in</a></li>
			<li> <a href="https://ro.wikipedia.org/wiki/Automobil"  target="_blank">Wikipedia</a></li>
			<li<><button id="btn" class="btn">Theme </a></button></li>
		</ul>
	</div>			
    <br>
    <br>
    
<div class="content-area content-area-contacts">
    <div class="contact_us"> 
    
    <h1>Contact us</h1>

<div class="form_container">
    <form action="contacts.php" id="form" method="POST">
        <input type="text" id="name" name="name" placeholder="Numele/Prenumele">
            <br>
            <br>
        <p class="error_form" id="name_error_message"></p>
        <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <br>
        <p class="error_form" id="email_error_message"></p>
        <input type="text" id="message" name="message" placeholder="Mesajul">
            <br>
            <br>
        <input type="submit" id="submit" value="Send" name="submit">
        <p id="validationText"></p>
    </form>
</div>
</div>
</div>
</div>
</header>
<script src="../javascript/validation-functions.js"></script>
<script src="../javascript/contacts-validation.js"></script>
<script src="../javascript/java.js"></script>
</body>
</html>