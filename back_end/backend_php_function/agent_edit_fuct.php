<!-- AGENT ADD FUNCTION START -->
<?php
session_start();
require_once '../includes/db_connect.php';
print_r($_POST);

$id = $_SESSION['get_id'];

$agent_name = $_POST['agent_name'];
$agent_phone = $_POST['agent_phone'];
$agent_messanger = $_POST['agent_messanger'];
$agent_whatsapp = $_POST['agent_whatsapp'];
$agent_type = $_POST['agent_type'];
$agent_refer_id = $_POST['agent_refer_id'];
$agent_id = $_POST['agent_id'];
$agent_rating = $_POST['agent_rating'];

$isTrue = false;

if($agent_name){
    $_SESSION['agent_name'] = $agent_name;
}else{
    $_SESSION['error_message'] ='Fill Agent name with Only letter ';
    $isTrue = true;
}
if($agent_phone){
    $_SESSION['agent_phone'] = $agent_phone;
}
else{
    $_SESSION['error_phone_message'] ='Please, give agent name';
    $isTrue = true;
}
if($agent_whatsapp){
    $_SESSION['agent_whatsapp'] = $agent_whatsapp;
}else{
    $_SESSION['error_whatsapp_message'] ='Please, give agent name';
    $isTrue = true;
}
if($agent_type){
    $_SESSION['agent_type'] = $agent_type;
}else{
    $_SESSION['error_type_message'] ='Please, give agent name';
    $isTrue = true;
}





if(!$isTrue){
    $data_update_query = "UPDATE agent_infos SET agent_name='$agent_name',agent_phone='$agent_phone',
    agent_messanger='$agent_messanger',agent_whatsapp='$agent_whatsapp',agent_type='$agent_type',
    agent_id='$agent_id',agent_refer_id='$agent_refer_id',agent_rating='$agent_rating' WHERE id='$id'";
    mysqli_query($db_connection,$data_update_query);

    header('location: ../backend_page/agent_list.php');
    $_SESSION['agent_edit_message'] = "Edit Successfull!";
}else{

    header('location: ../backend_page/agent_edit.php');

}


?>