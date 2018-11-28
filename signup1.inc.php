
<?php
//the condition of the if is true if the submit button has been clicked
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['pwd'])){

	include_once './include/dbcon.inc.php';

	$first =  $_POST['firstname'];
	$last =  $_POST['lastname'];
	$uname =  $_POST['username'];
	$pwd =  $_POST['pwd'];



		$sql1="SELECT * FROM users WHERE user_name ='".$uname."'";
	//	echo $sql1;
		$result1 = $conn->query($sql1);
		if($result1->num_rows>0){
			$alreadyexists=true;
			header("Location: ./Signup.php?signup=usertaken");
			exit();
		}
		else{
			$hashedPwd = hash('sha256', $_POST['pwd']);
			//Now we introduced the data inside the database
			$sql1="INSERT INTO users(first_name, last_name, user_name, user_pwd) VALUES ('".$first."','".$last."','".$uname."','".$hashedPwd."')";
			//echo $sql1;
			$result1 = $conn->query($sql1);
			header("Location: ./SignupSuccess.php?signup=success");/*INTENTAR CAMBIAR ESTO PARA DAR UN MENSAJE DE EXITO!*/
			exit();
		}

		
	
}
else{
//if they don't click the button, they stay in the sign up page'
	header("Location: ./Signup.php");
	exit();//close and stop the script for running
}
?>