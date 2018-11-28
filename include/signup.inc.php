<?php
//the condition of the if is true if the submit button has been clicked
if(isset($_POST['submit'])){
	include_once 'dbcon.inc.php'

	$first = mysqli_real_escape_string($conn, $_POST['firstname']);
	$last = mysqli_real_escape_string($conn, $_POST['lastname']);
	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


	/* mysqli_real_escape_string(connection,escapestring) let us prevent users from insert especial characters in out database. Where:
		connection:	 Specifies the MySQL connection to use
		escapestring: The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
	*/

	//We check there are no empty fields:
	if(empty($first) || empty($last) || empty($uname) || empty($pwd) ||){
		header("Location: ../Signup.php?sigup=empty");//msgerror
		exit();//close and stop the script for running
	}
	else{
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
		//this checks if there are character not allowed in this fields
			header("Location: ../Signup.php?sigup=empty");//msgerror
			exit();
		}
		else{
		//we check if the user exists already in the database
					/*meter esto?
					<?php
						$newuser = false;
						if (isset($_POST['username']) and isset($_POST['password'])) {
    						$username = filter_var(trim($_POST['username']), 					FILTER_SANITIZE_STRING);
    						$password = hash('sha256', $_POST['password']);
						}
						else{
						$newuser = true;
						}
					?>
					*/
		$sql1="SELECT * FROM users WHERE user_name ='".$uname"'";
		$result1 = $conn->query($sql1);
		if($result1->num_rows>0){
			$alreadyexists=true;
			header("Location: ../Signup.php?signup=usertaken");
			exit();
		}
		else{
			$hashedPwd = hash('sha256', $_POST['pwd']);
			//Now we introduced the data inside the database
			$sql1="INSERT INTO users(first_name, last_name, user_name, user_pwd) VALUES ('".$first."','".$last."','".$uname."','".$hashedPwd."')";
			$result = mysqli_query($conn, $sql1)
			header("Location: ../Signup.php?signup=success");
			exit();
		}

		}
	}
}
else{
//if they don't click the button, they stay in the sign up page'
	header("Location: ../Signup.php");
	exit();//close and stop the script for running
}