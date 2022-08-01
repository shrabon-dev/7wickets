<!-- mysqli database connection -->

<?php
$db_connection = mysqli_connect("localhost","root","","7wicket");

class DataBase{

    public $db_connection = "";
    public $select_mysqli_query='';
   
    function __construct()
    {
     $this->db_connection = mysqli_connect("localhost","root","","kashba");
        
    }

    function SELECT_QUERY($table_name,$field_name='',$field_value=''){
        if($field_name){
            $select_query = "SELECT * FROM $table_name WHERE $field_name=$field_value";
        }else{
          $select_query = "SELECT * FROM $table_name";
        }

       return $this->select_mysqli_query = mysqli_query($this->db_connection,$select_query);
    }



}
$select_data_base = new DataBase();

// $show_data = $select_data_base->SELECT_QUERY('welcome');

// print_r($select_data_base->SELECT_QUERY('users'));

// echo "$select_data_base->SELECT_QUERY('users')";







?>