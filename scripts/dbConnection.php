<?php 
    try{
            $connection = new PDO('mysql:host=localhost;dbname=vaccination','root','');
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
    }catch(Exception $e){
           echo "ERR:".$e->getMessage();
    }
?>