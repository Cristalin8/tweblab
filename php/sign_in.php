<?php 
//session_start();
if(!isset($success)){
    $success = '';
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="../css/styleforma.css">
    <script src="../javascript/jquery.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sign in</title>
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
    
    <h1>Sign in</h1>

    <p id="alert_error_message"></p>
<div class="form_container">



    <form action="sign_in-validation.php" id="form" class='login_form' method="post">
        <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <br>
            <p class="error_form" id="email_error_message2"></p>
       
            <input type="password" id="password" name="password" placeholder="Parola">
            <br>
            <br>
        <p class="error_form" id="password_error_message"></p>
        <input type="submit" id="submit" value="Send" name="submit">
                <?php if(isset($email_error)){ ?>
                    <p class="php_error"> <?php echo $email_error ?> </p>
                <?php } ?>
                <?php if(isset($password_error)){ ?>
                    <p class="php_error"> <?php echo $password_error ?> </p>
                <?php } ?>

                <?php if(!isset($email_error) && !isset($password_error) ){ ?>
                <p class="php_error"> <?php echo $success ?> </p>
                <?php } ?>
    </form>
</div>
</div>
</div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/sign-in-validation.js"></script>
<script src="../javascript/java.js"></script>
</body>
</html>