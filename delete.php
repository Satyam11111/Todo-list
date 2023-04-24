<?php 
include 'connection.php';


$var_value = $_GET['vardel']; 
$userid= $_SESSION['USER_ID'];
$sql = "delete from todo where id = '$var_value'";

$val = $conn->query($sql);
if($val){
header('location: todo.php');
};

 ?>