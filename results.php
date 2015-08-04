<!--
Author: Jessica Mullins, 2015
--->
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A simple fun fortune teller app">
		<meta name="author" content="Jessica Mullins">

		<title>Fortune Teller</title>

		<!--- Custom Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

		<!--- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Bootstrap JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</head>

	<body>
		<!-- PHP Form Processing -->
		<?php
		// Variables for the form results
		$spouse = $kids = $career = $location = $user = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$spouse = get_spouse($_POST["spouse1"], $_POST["spouse2"], $_POST["spouse3"]);
			$kids = get_kids($_POST["kids"]);
			$career = get_career($_POST["hobby"], $_POST["subject"]);
			$location = get_location($_POST["location"]);
			$user = test_input($_POST["user"]);
			$result = compile_result($spouse, $kids, $career, $location, $user);
		}

		function compile_result($spouse, $kids, $career, $location, $user) {
			$result = "<h2>For your future, we predict....</h2>" . "<p>You will marry <b>" . $spouse . "</b>." . " For kids...we predict you will have <b>" . $kids . "</b>. Awesome right? " . "<b>" . $career . "</b>" . " Lucky you! You get to live in beautiful <b>" . $location . "</b>. Every day is a new adventure there!" . " What do you think <b>" . $user . "</b>? Your future is looking pretty exciting!</p>";
			return $result;
		}

		function get_spouse($spouse1, $spouse2, $spouse3) {
			$spouse1 = test_input($spouse1);
			$spouse2 = test_input($spouse2);
			$spouse3 = test_input($spouse3);
			$num = rand(1, 3);
			switch ($num) {
				case 1 :
					return $spouse1;
				case 2 :
					return $spouse2;
				case 3 :
					return $spouse3;
				default :
					return "Mystery spouse";
			}
		}

		function get_kids($num_kids) {
			switch ($num_kids) {
				case 'A' :
					//none
					return rand(0, 1);
					break;
				case 'B' :
					return rand(2, 4);
				case 'C' :
					return rand(5, 19);
				case 'D' :
					return rand(0, 10);
				default :
					return "no value given";
			}
		}

		function get_career($hobby, $subject) {
			switch ($hobby) {
				case 'reading' :
					$options = array("publisher", "writer", "journalist", "avid Wikipedia reader", "bookstore clerk");
					return "You will  be an awesome " . $options[rand(0, 4)] . " with a special focus on " . $subject[rand(0, 1)] . ".";
				case'netflix' :
					$options = array("actor", "movie critic", "school teacher that watches Netflix on the weekends", "screenplay writer", "talk show host");
					return "Your career will lead you to being a fantastic " . $options[rand(0, 4)] . ". You love your job and you still find time for " . $subject[rand(0, 1)] . ".";
				case'music' :
					$options = array("singer", "musician", "DJ", "radio host", "struggling artist");
					return "In your future I see you devoting your time to being the best " . $options[rand(0, 4)] . " you can be. While working for your passion, you also get a PhD in " . $subject[rand(0, 1)] . ".";
				case'sports' :
					$options = array("professional athlete", "Super Bowl correspondent", "Sports Center host", "high school sports coach", "professional mascot");
					return "Believe it or not, but you will become a famous " . $options[rand(0, 4)] . "! In your free time you will volunteer at youth programs teaching " . $subject[rand(0, 1)] . ".";
				case'food' :
					$options = array("foodie", "food critic", "food blogger", "owner of a fast food chain", "private chef to the President");
					return "Your hobby will turn into your career. You will become a " . $options[rand(0, 4)] . " that incorporates " . $subject[rand(0, 1)] . " into your job whenever you can.";
				default :
					return "You will retire early.";
			}
		}

		function get_location($loc) {
			$option = $loc[rand(0, count($loc))];
			switch ($option) {
				case 'west' :
					$places = array("Washington", "Oregon", "California", "Idaho");
					$ret_val = rand(0, 3);
					return $places[$ret_val];
				case 'midwest' :
					$places = array("Illinois", "Wisconsin", "Ohio", "Iowa");
					$ret_val = rand(0, 3);
					return $places[$ret_val];
				case 'south' :
					$places = array("Florida", "Georgia", "Texas", "Mississippi");
					$ret_val = rand(0, 3);
					return $places[$ret_val];
				case 'east' :
					echo 'here';
					$places = array("New York", "Washington DC", "New Jersey", "Maine");
					$ret_val = rand(0, 3);
					return $places[$ret_val];
				case 'overseas' :
					$places = array("Canada", "Japan", "France", "Peru");
					$ret_val = rand(0, 3);
					return $places[$ret_val];
				default :
					$ret_val = "Hawaii";
					return $ret_val;
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>

		<!-- Header -->
		<header>
			<div class="container">
				<div class="intro-heading">
					Fortune Teller
				</div>
				<div class="intro-subtext">
					Find out who you will marry, where you will work, how many kids you will have and more!
				</div>
			</div>
		</header>

		<!-- Intro -->
		<section id="intro">
			<div class="container">
				<div class="intro-text">
					Ok...we've used your answers and we've been able to see into your future...
				</div>
		</section>

		<!-- Results Section -->
		<section id="results">
			<div class="container">
				<div class="row">
					<?php
					echo $result;
					?>
				</div>
				<br>
				<p>
					Don't like your results?
				</p>
				<p>
					<br>
					<a href="index.php" class="btn btn-lg"> <span class="glyphicon glyphicon-arrow-left"></span> Try again!</a>
				</p>
			</div>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; Jessica Mullins 2015</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
                       		 <li>
                        		<a href="https://www.linkedin.com/in/jessicamullins1"><i class="fa fa-linkedin"></i></a>
                       		 </li>
		               		 <li>
		                		<a href="https://github.com/jlamullins"><i class="fa fa-github"></i></a>
                        	</li>
							<li>
								<a href="http://instagram.com/mullinsjessica"><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<span class="copyright"><a href="#" data-toggle="modal" data-target="#resources">Resources</a></span>
					</div>
				</div>
			</div>
					<!-- Resources Section -->
			<div id="resources" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h4 class="modal-title">Resources</h4>
						</div>
						<div class="modal-body">
							<p>
								This mini project was created for fun by Jessica Mullins. Code was developed using the following resources: <a href="http://www.w3schools.com/">w3schools.com</a>, <a href="http://startbootstrap.com/">Start Bootstrap</a>, various posts from <a href="http://stackoverflow.com/">Stack Overflow</a> and some of Jessica's previous projects.
								The color scheme was selected using <a href="http://www.paletton.com">Paletton</a>. Feel free to check out the code on <a href="https://github.com/jlamullins/FortuneTeller">GitHub</a>.
							</p>
							<p>
								Thank you!
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button>
						</div>
					</div>
				</div>
			</div>
		
		</footer>

		<!-- JavaScript -->
		<script src="js/script.js" type="text/javascript"></script>

	</body>
</html>