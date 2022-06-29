<?php
		require 'dbConnection.php';
		session_start();
		if(isset($_POST['save']))
		{
			if(!empty($_POST['vaccin']) and !empty($_POST['dose']))
			{
				require 'functions.php';
				$getSerial = getSerial();
				if($connection->query("INSERT INTO vaccins(name,dose,cnumber) VALUES ('".$_POST['vaccin']."','".$_POST['dose']."','".$getSerial."')"))
				{
					header('location:../vaccins.php?data=saved');
				}else{
					header('location:../vaccins.php?data=notSaved');
				}
			}else{
				header('location:../vaccins.php?data=empty');
			}
		} 
		
		if(isset($_POST['addbaby']))
		{
			if(!empty($_POST['fname']) and !empty($_POST['lname']) and ! empty($_POST['date']) and!empty($_POST['bplace']) and ! empty($_POST['nation']))
			{
				if(! $_FILES['baby'] == '')
				{
					require 'functions.php';
					$fname =$_POST['fname'];
					$lname = $_POST['lname'];
					$date = $_POST['date'];
					$dir = 'babies/';
					$img = $dir.basename($_FILES['baby']['name']);
					$getSerial = getSerial();
					
					// if(move_uploaded_file($_FILES['baby']['tmp_name'], $img))
					// {
						$in = "INSERT into baby(no,fname,lname,bday,bplace,year,nationality,sexe,avatar) values('".$getSerial."','".$fname."','".$lname."','".$date."','".$_POST['bplace']."','".date('Y')."','".$_POST['nation']."','".$_POST['sex']."','".$img."') ";
						if($connection->query($in))
						{
							header('location:../babies.php?er=ok');
						}else{header('location:../babies.php?er=ko');}
					// }else{header('location:../babies.php?er=up');}
				}else{header('location:../babies.php?er=f');}
			}else{header('location:../babies.php?er=e');}

		}elseif(isset($_POST['update'])){
			if(!empty($_POST['fname']) and !empty($_POST['lname']) and !empty($_POST['bplace']) and ! empty($_POST['nation']))
			{
				if(! $_FILES['baby'] == '')
				{
					require 'functions.php';
					$fname =$_POST['fname'];
					$lname = $_POST['lname'];
					$date = $_POST['date'];
					$dir = 'babies/';
					$img = $dir.basename($_FILES['baby']['name']);
					$getSerial = getSerial();
					$serial = $getSerial+1;
					if(move_uploaded_file($_FILES['baby']['tmp_name'], $img))
					{
						$in = "update baby set no = '".$serial."',fname ='".$fname."',lname ='".$lname."',bday ='".$date."',bplace='".$_POST['bplace']."',year = '".date('Y')."',nationality='".$_POST['nation']."',sexe='".$_POST['sex']."',avatar='".$img."' where id = '".$_GET['aid']."' ";
						if($connection->query($in))
						{
							header('location:../babies.php?er=ok');
						}else{header('location:../babies.php?er=ko');}
					}else{header('location:../babies.php?er=up');}
				}else{header('location:../babies.php?er=f');}
			}else{header('location:../babies.php?er=e');}
		}

		if(isset($_POST['addVaccined']))
		{
			if(!empty($_POST['child']))
			{
				$v_dose_ = $connection->query("SELECT dose from vaccins where cnumber = '".$_POST['vaccin']."'")->fetch();
		 		$v_dose = $v_dose_['dose'];
		 		if($_POST['dose'] > $v_dose_){
		 			header('location:../vaccined.php?er=ko');
		 		}else{
		 			$d = "INSERT into vaccined(vaccin,child,month,year,date,dose) values ('".$_POST['vaccin']."','".$_POST['child']."','".$_POST['month']."','".$_POST['year']."','".$_POST['date']."','".$_POST['dose']."')";
					if($connection->query($d))
					{
						header('location:../vaccined.php?er=ok');
					}
				}
				
			}
		}

		//change the used year for the system
		if(isset($_GET['year']))
		{
			if (!empty($_GET['year']))
			{
				$_SESSION['year'] = trim($_GET['year']);
				header('location:../index.php?year='.$_SESSION['year']);
			}
		}
?>