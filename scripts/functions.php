<?php 

       function getSerial()
       {
           require 'dbConnection.php';
	       $count = $connection->query("select * from baby")->rowCount();
	       $year = date('Y');
	       $month = date('m');
	       for ($i=0; $i < $count ; $i++)
	       { 
	       	   $getSerial = $year.$month.$i+1;
	       	
	       }
	      return $getSerial;
       }  

       function Count_($query)
       {
       	 require 'dbConnection.php';
       	 $count_ = $connection->query($query)->rowCount();
       	 return $count_;
       }
      
?>