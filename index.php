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
					Remember the days of making <a href="https://en.wikipedia.org/wiki/Paper_fortune_teller">paper fortune tellers</a>? Now you can see into your
					future without having to fold orgami! By answering a few questions, we will help you find out who you will marry, where you will
					live and even how many kids you will have.
					<br>
					<p>
						<a href="#spouseName" class="btn btn-lg page-scroll"> <span class="glyphicon glyphicon-arrow-down"></span> Let's get started! </a>
					</p>
				</div>
		</section>

		<!-- Form -->
		<div class="container">
			<form name="fortune" class="form-horizontal" role="form" method="post" action="results.php" onsubmit="return validateForm()">

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
									No kids for me!
								</label>
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
									I want be to be able to have a family baseball team!
								</label>
							</div>
							<div class="radio col-sm-3">
								<label>
									<input type="radio" name="kids" value="D">
									I'm going to leave the number of kids up to chance!
								</label>
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

				<!-- Location Section -->
				<section id="state" class="bg-light-blue">
					<div class="form-group">
						<h2>Location, Location, Location</h2>
						<div class="row">
							<p>
								Okay, we've got spouse, kids, and career information. Now, where would you be interested in living?
							</p>
						</div>
						<div class="center">
							<div class="checkbox">
									<label>
										<input type="checkbox" value="west" name="location[]">
										West Coast. I'm <i>California Dream'</i>
									</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="midwest" name="location[]">
									Give me the cornfields any day. I'm hoping for the Midwest!
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="south" name="location[]">
									Take me home to the south!
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="east" name="location[]">
									East Coast all the way!
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="overseas" name="location[]">
									I have wandering feet... I'd like to be overseas.
								</label>
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