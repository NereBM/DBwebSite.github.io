<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Modules</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">  Estilos en https://bootswatch.com/sandstone/ -->
	<!--Mi archivo de css:-->
	<link rel="stylesheet" type="text/css" href="myCommonStyles.css">

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
	<script type="text/javascript" src="myJS.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<!-- PARA VER MAS COMPONENTES DE ESTE FRAMEWORKhttps://v4-alpha.getbootstrap.com/components/navbar/ -->
</head>

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

	$moduleid = "G54PRG";
	?>
	 

<body>



	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="https://nottinghamcityofliterature.com/imager/uploads/profile-media/2069/nottingham-university-icon_32f6b8f002aa7491fbce3c05723ac793.jpg" width="40" height="30" alt="">
		</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Home </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">My Modules <span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My Timetable</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My Marks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My Surveys</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="second_body">

					<?php
						$sql="SELECT module.title, first_name, last_name, office, email, module.classroomID, building, timetable 
						FROM module, classroom, lecturer, TaughtBy 
						WHERE module.moduleID = TaughtBy.moduleID 
						AND module.classroomID = classroom.classroomID
						AND lecturer.lecturerID = TaughtBy.LecturerID
						AND module.moduleID ='".$moduleid."'";
						
						$result = $conn->query($sql);

						if($result->num_rows>0){
							$row=$result->fetch_assoc();

							echo '<h3> My Modules > '.$row['title'].' </h3>';
							echo '<div style="overflow-x:auto;">';

								echo '<table class="table table-bordered" style=" margin-top: 1%; background-color: white">';

								echo '<tbody>';

									echo '<thead>';
										echo '<tr style=" color:#fff; background-color:rgb(24, 96, 124)">';
											echo '<th colspan="3" style="text-align: center">'.$moduleid." - ".$row['title'].'</th>';
										echo '</tr>';
									echo '</thead>';

									echo '<tbody>';

										echo '<tr>';
											echo '<th rowspan="3" style=" color:#fff; background-color:rgb(24, 96, 124); text-align: center; vertical-align: middle"> Lecturer </td>';
												echo '<td> Name </td>';
												echo '<td>'.$row['first_name']." ".$row['last_name'].'</td>';
										echo '</tr>';
										echo '<tr>';
												echo '<td> Email </td>';
												echo '<td>'.$row['email'].'</td>';
										echo '</tr>';
										echo '<tr>';
												echo '<td> Office </td>';
												echo '<td>'.$row['office'].'</td>';
										echo '</tr>';


										echo '<tr>';
											echo '<th rowspan="2" style=" color:#fff; background-color:rgb(24, 96, 124); text-align: center; vertical-align: middle"> Location </td>';
												echo '<td> Classroom </td>';
												echo '<td>'.$row['classroomID'].'</td>';
										echo '</tr>';
										echo '<tr>';
												echo '<td> Building </td>';
												echo '<td>'.$row['building'].'</td>';
										echo '</tr>';

										echo '<tr>';
											echo '<th style=" color:#fff; background-color:rgb(24, 96, 124); text-align: center; vertical-align: middle"> Timetable </td>';
												echo '<td colspan="2">'.$row['timetable'].'</td>';
										echo '</tr>';


									echo '</tbody>';

							}
					?>

				
			</table>
	
		</div>
	</div>

</body>
</html>