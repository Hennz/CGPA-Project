<?php
// Database Connection
$host = "localhost";
$user = "root";
$password = "";
$database = "project work";
$connect_mysql = mysql_connect($host,$user,$password);
$select_db = mysql_select_db($database,$connect_mysql);

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
//$http_referer =$_SERVER['HTTP_REFERER'];


//Function to confirm whther user is logged in
 function loggedIn()
 {
     if(isset($_SESSION['user_id']))
	 {
       return true;
     }
	 else
	 {
       return false;
     }

 }


//Function to pick logged in admin details
function getUserField($field){
    $query1 ="SELECT `$field` FROM `admin` WHERE `AdminID` = '".$_SESSION['user_id']."'";

    if($query_run = mysql_query($query1)){
        if($query_result = mysql_result($query_run, 0, $field )) {
            return $query_result;
        }
    }
}
?>
