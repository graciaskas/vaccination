<?php 
    session_start();
    
    require 'dbConnection.php';
    $data = $connection->query("select rollnumber from admin where username = '".$_SESSION['admin']."'")->fetch();
    if($connection->query("update logins set end = '".date('h:i:s')."' where admin = '".$data['rollnumber']."'")){
	       session_unset();
	       session_destroy();
	       header('location:../login.php?err=notConnected');
    }
     
?>