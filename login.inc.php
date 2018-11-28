<?php
//the condition of the if is true if the fields are not empty
if(isset($_POST['username']) && isset($_POST['pwd'])){

	include_once './include/dbcon.inc.php';

	$username =  $_POST['username'];
	$password =  $_POST['pwd'];

	$sql1="SELECT * FROM users WHERE user_name ='".$username."'";
	$result1 = $conn->query($sql1);
	if($result1->num_rows>0){
			$row = $result1->fetch_assoc();
			echo $row;
			$pwd_check = $row['user_pwd'];
			$hashedPwd = hash('sha256', $_POST['pwd']);
			if($pwd_check==$hashedPwd){

				header("Location: ./Home.html");
				exit();
			
			}
			else{

				header("Location: ./Login.php?login=wrongpwd");
				exit();
			
			}

			
		}
		else{
			//echo $sql1;
			$result1 = $conn->query($sql1);
			header("Location: ./SignupSuccess.php?login=invalidUsername");
			exit();
		}

}
else{
//if they don't click the button, they stay in the login page'
	header("Location: ./Login.php");
	exit();//close and stop the script for running

}