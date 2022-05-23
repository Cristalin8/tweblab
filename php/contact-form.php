
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
$name_error = NULL;
$email_error =NULL;


    $name = $_POST['name'];
    $email = $_POST['email'];

    
include "validation-functions.php";
//if(isset($name,$email)){
if($name_error == NULL && $email_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}
?>
