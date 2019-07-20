<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin page</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="theCSS.css">
</head>

<body>


	<!-- This is the header. The header consists of the website's logo and the navigation bar. -->
	<header>
		<h1 class="Color1">Chollerton</h1>
		<h1 class="Color2">Tearooms</h1>
		<nav>
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="findoutmore.html">Find out more</a>
				</li>
				<li><a href="admin.php">Admin</a>
				</li>
				<li><a href="credits.html">Credits</a>
				</li>
				<li><a href="Wireframe.pdf">Wireframe</a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="main-admin">
		<h2 id='your-details'>All users' details</h2>
		<br>
		<div class="admin-table">
			<?php

			include 'database_conn.php'; // make db connection

			$sql = "SELECT forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, catDesc FROM CT_expressedInterest JOIN CT_category on CT_expressedInterest.catID = CT_category.catID ORDER BY surname ASC";

			$result = $dbConn->query( $sql );

			//echo "<table class='admin-table'>";
			echo "<table>";
			echo "<tr>";
			echo "<th>Forename</th>";
			echo "<th>Surname</th>";
			echo "<th>Address</th>";
			echo "<th>Landline number</th>";
			echo "<th>Mobile number</th>";
			echo "<th>E-mail address</th>";
			echo "<th>Facility</th>";

			while ( $row = mysqli_fetch_array( $result ) ) {


				echo "<tr>";
				echo "<td>" . $row[ 'forename' ] . "</td>";
				echo "<td>" . $row[ 'surname' ] . "</td>";
				echo "<td>" . $row[ 'postalAddress' ] . "</td>";
				echo "<td>" . $row[ 'landLineTelNo' ] . "</td>";
				echo "<td>" . $row[ 'mobileTelNo' ] . "</td>";
				echo "<td>" . $row[ 'email' ] . "</td>";
				echo "<td>" . $row[ 'catDesc' ] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close( $dbConn );


			?>
		</div>
	</div>
	<footer>
		<p id="footerText"> &copy; Copyright 2019 Chollerton Tearooms <br> Website created by Panayiotis Petsas</p>
	</footer>
</body>
</html>