<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">  Estilos en https://bootswatch.com/sandstone/ -->
    <link rel="stylesheet" type="text/css" href="myStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="myJS.js"></script>


	    <?php
    $servername = "mysql.cs.nott.ac.uk";
    $username = "psxnb3";
    $password = "W0lfgang3";
    $dbasename = "psxnb3";
    $conn = new mysqli($servername, $username, $password, $dbasename);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit;
    }
	?>

</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="height: 345px">
                <div class="card-body">
                    <form action="signup1.inc.php" method="POST">
                        <h5 style="color:white" style="font-weight: bold">Sign up</h5>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" placeholder="First name" name="firstname"> <br>
						</div>
						<div class="input-group form-group">
							<input type="text" class="form-control" placeholder="Last name" name="lastname"> <br>
						</div>
						<div class="input-group form-group">
							<input type="text" class="form-control" placeholder="Username" name="username"> <br>
						</div>
						<div class="input-group form-group">
							<input type="text" class="form-control" placeholder="Password" name="pwd"><br>
						</div>
						<div class="input-group form-group">
							<button type="submit" class="btn float-right login_btn" style="margin-left:250px" id="signup_btn">Sign up </button>
						</div>

                    </form>


                </div>
                <div class="card-footer foot">
                    <div class="d-flex justify-content-center">
                        <a href="Login.php" style="color:white">Already have an account? Login</a>  <!--href indica el link al que dirige si clickamos el texto -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
