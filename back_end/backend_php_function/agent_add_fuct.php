<!-- AGENT ADD FUNCTION START -->
<?php
session_start();
require_once '../includes/db_connect.php';

$agent_name = $_POST['agent_name'];
$agent_phone = $_POST['agent_phone'];
$agent_messanger = $_POST['agent_messanger'];
$agent_whatsapp = $_POST['agent_whatsapp'];
$agent_type = $_POST['agent_type'];
$agent_refer_id = $_POST['agent_refer_id'];
$agent_id = $_POST['agent_id'];
$agent_rating = $_POST['agent_rating'];

$data_insert_query = "INSERT INTO agent_infos (agent_name,agent_phone,agent_messanger,agent_whatsapp,agent_type,agent_id,agent_refer_id,agent_rating) 
VALUES('$agent_name','$agent_phone','$agent_messanger','$agent_whatsapp','$agent_type','$agent_id','$agent_refer_id','$agent_rating')";
mysqli_query($db_connection,$data_insert_query);

header('location: ../backend_page/agent_add.php');
$_SESSION['agent_adding_message'] = "Agent successfully added";



?>