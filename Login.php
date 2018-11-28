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
            <div class="card">
                <div class="card-body">
                    <form action="login.inc.php" method="post">
                        <h5 style="color:white" style="font-weight: bold">Login</h5>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" placeholder="username" name="username">

                        </div>
                        <div class="input-group form-group">

                            <input type="password" class="form-control" placeholder="password" id="myPassword" name="pwd">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary show_btn" id="show_btn1" type="button" aria-pressed="true" onclick="ShowHidePass()">Show</button>
                            </div>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <!-- Descomentar la parte de abajo cuando añada php-->
                            <input type="submit" value="Login" class="btn float-right login_btn" >
                            <!--<a href="Home.html" class="btn float-right login_btn" name="submit">Login</a>-->
                            
                        </div>
        </form>
    </div>
    <div class="card-footer foot">
        <div class="d-flex justify-content-center">
            <a href="Signup.php" style="color:white">Create an account</a>  <!--href indica el link al que dirige si clickamos el texto -->
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

