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
			echo "posting....";
			$spouse = get_spouse($_POST["spouse1"], $_POST["spouse2"], $_POST["spouse3"]);
			$kids = get_kids($_POST["kids"]);
			$career = get_career($_POST["hobby"], $_POST["subject"]);
			$location = get_location($_POST["location"]);
			$user = test_input($_POST["user"]);
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
					return "You will retire early";
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
					$ret_val = "The world is your home.";
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
					Remember the days of MASHOUT? Or making paper oragami fortune tellers? What a great way to help you see into your future!
					This website will help you do that as well. By answering a few questions, we will help you find out who you will marry, where you will
					live and even how many kids you will have. We hope you have fun playing with this. If you don't like the results, try asking us to predict
					the future again.
					</p>
					<p>
						<a href="#spouseName" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Let's get started! </a>
					</p>
				</div>
		</section>

		<!-- Form -->
		<div class="container">
			<form name="fortune" class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">

				<!-- Spouse Section -->
				<section id="spouseName" class="bg-light-blue">
					<div class="form-group">
						<h2>Marriage</h2>
						<p>
							Who are three people you would consider marrying?
							<br>
							Think carefully! You'll have to share a bathroom with this person for the rest of your life:
						</p>
						<div class="row">
							<label for="spouse1" class="control-label col-sm-3">Potential Spouse #1: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="spouse1">
							</div>
						</div>
						<div class="row">
							<label for="spouse2" class="control-label col-sm-3">Potential Spouse #2: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="spouse2">
							</div>
						</div>
						<div class="row">
							<label for="spouse3" class="control-label col-sm-3">Potential Spouse #3: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="spouse3">
							</div>
						</div>
						<div class="row">
							<br>
							<p>
								<a href="#numKids" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Next</a>
							</p>
						</div>
					</div>
				</section>

				<!-- Kids Section -->
				<section id="numKids" class="bg-light-blue">
					<div class="form-group">
						<h2>Kids</h2>
						<p>
							How many kids will you have?
							<br>
							Now that we have a few potential spouses, let's talk about children.
							<br>
							This can be tough do decide but how many do you
							think you might want?
						</p>
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="radio col-sm-3">
								<label>
									<input type="radio" name="kids" value="A">
									No kids for me!</label>
							</div>
							<div class="radio col-sm-3">
								<label>
									<input type="radio" name="kids" value="B">
									I think I may have a couple but not too many.</label>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="radio col-sm-3">
								<label>
									<input type="radio" name="kids" value="C">
									I want be to be able to have a family baseball team!</label>
							</div>
							<div class="radio col-sm-3">
								<label>
									<input type="radio" name="kids" value="D">
									I'm going to leave the number of kids up to chance! </label>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="row">
							<br>
							<p>
								<a href="#job" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Next</a>
							</p>
						</div>
					</div>
				</section>

				<!-- Career Section -->
				<section id="job" class="bg-light-blue">
					<div class="form-group">
						<h2>Career</h2>
						<div class="row">
							<p>
								What will you do for a living?
								<br>
								Gotta find a way to make some $$$. You should do what you love.
								<br>
								Let's find out about your hobbies and interests.
							</p>
						</div>
						<div class="row">
							<label for="hobby" class="col-sm-6">Pick your favorite hobby:</label>
							<div class="col-sm-6">
								<select class="form-control" id="hobby" name="hobby">
									<option value="reading">Reading, I'm a total book lover.</option>
									<option value="netflix">Umm...Netflix?</option>
									<option value="music">Music. Playing. Singing. Listening. iTunesing.</option>
									<option value="sports">Sports fan, all day every day</option>
									<option value="food">Does eating count? If so, that's mine.</option>
								</select>
							</div>
						</div>
						<div class="row">
							<label for="career" class="col-sm-6">What subject do you like in school? (Pick 2)</label>
							<div class="col-sm-6">
								<select multiple class="form-control" id="subject" name="subject[]">
									<option value="math">Math. If I could meet one person, it would be Pythaoras</option>
									<option value="history">Gotta be history!</option>
									<option value="theater"><i>To be....or not to be</i>. I love theather!</option>
									<option value="sports">Couldn't wait for P.E.!</option>
									<option value="science">Biology, ever since Bill Nye introduced me to science it has been my fav.</option>
									<option value="spanish">Spanish. It was so exocit! </option>
									<option value="geography">Geography: give me a map and I'm happy</option>
								</select>
							</div>
						</div>
						<div class="row">
							<br>
							<p>
								<a href="#state" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Next</a>
							</p>
						</div>
					</div>
				</section>

				<section id="state" class="bg-light-blue">
					<div class="form-group">
						<h2>Location, Location, Location</h2>
						<div class="row">
							<p>
								Okay, we've got spouse, kids, and career information. Now, where will you live?
							</p>
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="west" name="location[]">
									West Coast. I'm <i>California Dream'</i></label>
							</div>
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="midwest" name="location[]">
									Give me the cornfields any day. I'm hoping for the Midwest!</label>
							</div>
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="south" name="location[]">
									Take me home to the south!</label>
							</div>
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="east" name="location[]">
									East Coast all the way!</label>
							</div>
						</div>
						<div class="row">
							<div class="checkbox">
								<label>
									<input type="checkbox" value="overseas" name="location[]">
									I have wandering feet... I'd like to be overseas.</label>
							</div>
						</div>
					</div>
					<div class="row">
						<br>
						<p>
							<a href="#yourName" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Next</a>
						</p>
					</div>
				</section>

				<!-- User Name Section -->
				<section id="yourName" class="bg-light-blue">
					<div class="form-group">
						<h2>Almost done....</h2>
						<p>
							Great. We almost have all the data we need to see the future. Last question!
						</p>
						<label for="user" class="col-sm-6">What is your name?</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="user" name="user">
						</div>
					</div>
					<div class="row">
						<p>
							<button type="submit" class="btn btn-lg">
								Submit
							</button>
						</p>
					</div>
				</section>
			</form>
		</div>

		<!-- Results Section -->
		<section id="results" class="bg-orange">
			<div class="container">
				<div class="row">
					<?php
					echo "<h2>For your future, I predict....</h2>";
					echo "
<p>
You will marry " . $spouse . ".";
					echo " For kids...I think you will have </p><p class=\"imp\"" . $kids . "</p>. Awesome right? ";
					echo $career;
					echo " Lucky you! You get to live in beautiful " . $location . ". Every day is a new adventure there!";
					echo " What do you think " . $user . "? Your future is looking pretty exciting!
</p>";
					?>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; Jessica Mullins 2014</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li>
								<a href="https://twitter.com/mullinsjessica"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="https://www.facebook.com/jessica.mullins.3950"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="http://instagram.com/mullinsjessica"><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- JavaScript -->
		<script src="js/script.js" type="text/javascript"></script>

	</body>
</html>