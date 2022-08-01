<?php
require_once '../includes/db_connect.php';
session_start();
 $rules_update = $_POST['rules_update'];
 $id = $_SESSION['get_rule_id'];

$rules_update_query = "UPDATE rules SET rules='$rules_update' WHERE rule_id='$id'";
mysqli_query($db_connection,$rules_update_query);
header('location: ../backend_page/rules_list.php');

$_SESSION['rule_update_message'] = "Update this rule";


?>