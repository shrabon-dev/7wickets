<?php 
require_once '../includes/db_connect.php';
session_start();
$id = $_GET['id'];

$delete_query = "DELETE FROM rules WHERE rule_id='$id'";
mysqli_query($db_connection,$delete_query);
header('location: ../backend_page/rules_list.php');
$_SESSION['rule_delete_message'] = "Deleted this rule";



?>