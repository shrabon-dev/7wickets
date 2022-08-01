<?php
require_once '../includes/db_connect.php';


$rules = $_POST['rules'];

if($rules){
    $data_insert_query = "INSERT INTO rules (rules) VALUES('$rules')";
    mysqli_query($db_connection,$data_insert_query);

    header('location: ../backend_page/rules_add.php');
    $_SESSION['rules_adding_message'] = "Rules successfully added";

}else{
    header('location: ../backend_page/rules_add.php');

}



?>