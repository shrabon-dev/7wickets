<?php 
require_once '../includes/db_connect.php';
session_start();
$id = $_GET['id'];

$delete_query = "DELETE FROM agent_infos WHERE id = '$id'";
mysqli_query($db_connection,$delete_query);
header('location: ../backend_page/agent_list.php');
$_SESSION['delete_message'] = "Deleted this agent info";



?>