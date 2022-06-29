<?php
		session_start();
		require "dbConnection.php";
		require 'functions.php';

		$data1 = $connection->query("SELECT * from admin ")->fetch();
		$data2 = $connection->query("SELECT * from logins")->fetch();
		$data3 = $connection->query("SELECT * from vaccins")->fetch();
		$data4 = $connection->query("SELECT * from vaccined where year = '".$_SESSION['year']."'")->fetch();
		$data5 = $connection->query("SELECT * from notification year = '".$_SESSION['year']."'")->fetch();
		$data6 = $connection->query("SELECT * from message year = '".$_SESSION['year']."'")->fetch();
		$data7 = $connection->query("SELECT * from baby year = '".$_SESSION['year']."'")->fetch();

		$count1 = Count_("SELECT * from admin");
		$count2 = Count_("SELECT * from logins");
		$count3 = Count_("SELECT * from vaccins");
		$count4 = Count_("SELECT * from vaccined");
		$count5 = Count_("SELECT * from notification");
		$count6 = Count_("SELECT * from message");
		$count7 = Count_("SELECT * from baby");

		$total = $count7 + $count6 +$count5 + $count4 + $count3 + $count2 + $count1;

		$array = array();
		for($e = 0;$e < $total;$e++){
			for($i = 0;$i < $count1;$i++){
				$array[] = $data1[$i];
			}
			echo $array[$e];
		}

?>