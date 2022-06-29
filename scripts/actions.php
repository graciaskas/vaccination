	<?php
		session_start(); 
		require'dbConnection.php';

		try{
			if(isset($_POST['login'])){
				if(empty($_POST['username']) || empty($_POST['password'])){
					header('location:../login.php?err=empty');
				}else{
					$username = htmlspecialchars($_POST['username']);
					$password = trim($_POST['password']);

					//get coresponding datas
					$query = "SELECT * FROM admin where username='".$username."' AND password ='".$password."'";
	                $datas = $connection->query($query)->fetch();
	                print_r($datas);
	                //verify if they match

	                if($datas['password'] == $password AND $datas['username'] == $username){
	                	$_SESSION['admin'] = $datas['username'];
	                	$_SESSION['start'] = $_POST['loginStarting'];

	                	if($connection->query("insert into logins(admin,start,end,day) values('".$datas['rollnumber']."','".$_POST['loginStarting']."','','".$_POST['day']."')")){
	                		header('location:../select.php?admin='.$_SESSION['admin'].'');
	                	}
	                	
	                }elseif($datas['username'] == $username AND $datas['password'] !== $password){
	                	header('location:../login.php?err=password');
	                }elseif($datas['username'] !== $username AND $datas['password'] == $password){
	                	header('location:../login.php?err=username');
	                }else{
	                	header('location:../login.php?err=invalid account');
	                }
				}
			}
		}catch(Exception $e){
			header('location:../login.php?err='.$e->getMessage);
		}
	?>