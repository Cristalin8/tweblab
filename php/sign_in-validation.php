<?php
session_start();
$success = "Success!";
$email = $_POST['email'];
$password = $_POST['password'];


if(empty($email)){
    $email_error = 'E-mailul dvs. nu este introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}
if(empty($password)){
    $password_error = 'Parola dvs. nu este introdusă';
}elseif(strlen($password) < 8){
    $password_error = 'Parola trebuie să aibă cel puțin 8 caractere';
}

$db_data = include('database.php');
$db_data = $db_data[0];

foreach($db_data as $user) {
    if($user['email'] === $email) {
        if($user['password'] === $password) {
            $_SESSION['email'] = $email;
        }
    }
}


include('sign_in.php');
?>