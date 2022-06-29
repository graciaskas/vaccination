<?php
		session_start();
		require "dbConnection.php";
		require 'functions.php';

		$data1 = $connection->query("select * from admin ")->fetch();
		$data2 = $connection->query("select * from logins")->fetch();
		$data3 = $connection->query("select * from vaccins")->fetch();
		$data4 = $connection->query("select * from vaccined where year = '".$_SESSION['year']."'")->fetch();
		$data5 = $connection->query("select * from notification where year = '".$_SESSION['year']."'")->fetch();
		$data6 = $connection->query("select * from message where year = '".$_SESSION['year']."'")->fetch();
		$data7 = $connection->query("select * from baby where year = '".$_SESSION['year']."'")->fetch();

		$count1 = Count_("select * from admin");
		$count2 = Count_("select * from logins");
		$count3 = Count_("select * from vaccins");
		$count4 = Count_("select * from vaccined");
		$count5 = Count_("select * from notification");
		$count6 = Count_("select * from message");
		$count7 = Count_("select * from baby");

		$total = $count7 + $count6 +$count5 + $count4 + $count3 + $count2 + $count1;

		$array = array();
		for($e = 0;$e < $total;$e++){
			for($i = 0;$i < $count1;$i++){
				$array[] = $data1[$i];
				echo $array[$e];
			}
			
		}

?>