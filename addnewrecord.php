<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmation page</title>
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
	<main class="confpage">
		<?php
		echo "\n";

		//$query = "UPDATE offers SET views = views + 1";

		$forename = isset( $_REQUEST[ 'forename' ] ) ? $_REQUEST[ 'forename' ] : null;
		$surname = isset( $_REQUEST[ 'surname' ] ) ? $_REQUEST[ 'surname' ] : null;
		$email = isset( $_REQUEST[ 'email' ] ) ? $_REQUEST[ 'email' ] : null;
		$landline = isset( $_REQUEST[ 'landline' ] ) ? $_REQUEST[ 'landline' ] : null;
		$mobile = isset( $_REQUEST[ 'mobile' ] ) ? $_REQUEST[ 'mobile' ] : null;
		$postaladdress = isset( $_REQUEST[ 'postaladdress' ] ) ? $_REQUEST[ 'postaladdress' ] : null;
		$facility = isset( $_REQUEST[ 'facility' ] ) ? $_REQUEST[ 'facility' ] : null;
		$contact = isset( $_REQUEST[ 'contact' ] ) ? $_REQUEST[ 'contact' ] : null;
		$errors = false;


		?>
		<div id="addRecordBox">

			<?php
			if ( ( !empty( $forename ) ) && ( !empty( $surname ) ) && ( !empty( $contact ) ) )
			{
				echo "<h2 id='your-detailsB'>Your details</h2>\n";
				if ( !empty( $forename ) ) {
					echo "<p>Forename: $forename</p>\n";
				}
				if ( !empty( $surname ) ) {
					echo "<p>Surname: $surname</p>\n";
				}
				if ( !empty( $email ) ) {
					echo "<p>Email: $email</p>\n";
				}
				if ( !empty( $landline ) ) {
					echo "<p>Landline number: $landline</p>\n";
				}
				if ( !empty( $mobile ) ) {
					echo "<p>Email: $mobile</p>\n";
				}
				if ( !empty( $postaladdress ) ) {
					echo "<p>Address: $postaladdress</p>\n";
				}
				if ( !empty( $facility ) ) {
					if ( $facility == "c1" ) {
						echo "<p>Facility: Tearoom</p>";
					} else if ( $facility == "c2" ) {
						echo "<p>Facility: Craft Shop</p>";

					} else if ( $facility == "c3" ) {
						echo "<p>Facility: Village Store</p>";

					} else if ( $facility == "c4" ) {
						echo "<p>Facility: Post Office</p>";

					} else if ( $facility == "c5" ) {
						echo "<p>Facility: Bed and Breakfast</p>";

					} else {
						echo "<p>Error. Check again.</p>";

					}
				}
				if ( !empty( $contact ) ) {
					echo "<p>Way of contact: $contact</p>\n";
				}

				//conditions to check facility for specific image to be displayed
				if ( $facility == "c1" ) {
					echo "<img class='php-image' src='tearoom.jpg' alt='Tea Room' />";
				}
				if ( $facility == "c2" ) {
					echo "<img class='php-image' src='craftshop.jpg' alt='Craft Shop' />";
				}
				if ( $facility == "c3" ) {
					echo "<img class='php-image' src='villagestore.jpg' alt='Village Store' />";
				}
				if ( $facility == "c4" ) {
					echo "<img class='php-image' src='postoffice.jpg' alt='Post Office' />";
				}
				if ( $facility == "c5" ) {
					echo "<img class='php-image' src='bedbreakfast.jpg' alt='Bed and Breakfast' />";
				}
			} 
			else {
				echo "<p> You have not entered a forename or surname or a way of contact. Please try again.</p> \n";
				$errors = true;
			}


			?>

		</div>
		<?php
		if ( $errors === false ) {
			include 'database_conn.php'; // make db connection




			$sql = "INSERT INTO CT_expressedInterest (forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, sendMethod, catID) values('$forename', '$surname', '$postaladdress', '$landline', '$mobile', '$email', '$contact', '$facility')";

			$result = $dbConn->query( $sql );


			// Check for and handle query failure
			if ( $result === false ) {
				echo "<p>Problem when saving: " . $dbConn->error . ". Try again</p>\n</body>\n</html>";
				exit;
			} else {
				echo "<p><br>Thank you for your interest.<br>We will be in contact with you as soon as possible.</p>\n";
			}
			$dbConn->close();

		}

		?>

			<div class="go-back"><a href="findoutmore.html">Click here to return back.</a></div>

	</main>

	<footer>
		<p id="footerText"> &copy; Copyright 2019 Chollerton Tearooms <br> Website created by Panayiotis Petsas</p>
	</footer>
</body>
</html>