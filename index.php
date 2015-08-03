<!--
Author: Jessica Mullins, 2015
--->
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A simple app to help me decide what to bake">
		<meta name="author" content="Jessica Mullins">

		<title>Fortune Teller</title>

		<!--- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

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
		<div class="container">
			<div class="jumbotron">
				<h1>Fortune Teller</h1>
				<p>
					Find out who you will marry, where you will work, how many kids you will have and more!
				</p>
				<p class="text-muted">
					A fun throwback app to the days of MASH.
				</p>
			</div>
		</div>
		<div class="container">
			<p>
				In order for our secret algorithm to be able to determine your future, we must first ask you a few questions.
			</p>
		</div>
		<div class="container">
			<form name="fortune" class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
				<div class="form-group">
					<h2>Who are three people you would consider marrying?</h2>
					<p>
						Think carefully! You'll have to share a bathroom with this person for the rest of your life:
					</p>
					<label for="spouse1">Potential Spouse #1</label>
					<input type="text" class="form-control" id="spouse1">
					<label for="spouse2">Potential Spouse #2</label>
					<input type="text" class="form-control" id="spouse2">
					<label for="spouse3">Potential Spouse #3</label>
					<input type="text" class="form-control" id="spouse3">
				</div>
				<div class="form-group" id="">
					<h2>How many kids will you have?</h2>
					<p>
						Now that we have a few potential spouses, let's talk about children. How many do you
						think you might want?
					</p>
					<div class="radio">
						<label>
							<input type="radio" name="kids" value="none">
							No kids for me!</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="kids" value="couple">
							I think I may have a couple but not too many.</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="kids" value="bbTeam">
							I want be to be able to have a family baseball team!</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="kids" value="suprise">
							I'm going to leave the number of kids up to chance! </label>
					</div>
				</div>
				<div class="form-group">
					<h2>What will you do for a living?</h2>
					<p>
						Gotta find a way to make some $$$. You should do what you love.
					</p>
					<label for="hobby">Pick your favorite hobby:</label>
					<select class="form-control" id="hobby">
						<option value="reading">Reading, I'm a total book lover.</option>
						<option value="netflix">Umm...Netflix?</option>
						<option value="music">Music. Playing. Singing. Listening. iTunesing.</option>
						<option value="sports">Sports fan, all day every day</option>
						<option value="food">Does eating count? If so, that's mine.</option>
					</select>
					<br />
					<label for="career">What subject do you like in school? Pick 2.</label>
					<select multiple class="form-control" id="career">
						<option value="math">Math. If I could meet one person, it would be Pythaoras</option>
						<option value="history">Gotta be history!</option>
						<option value="theather"><i>To be....or not to be</i>. I love theather!</option>
						<option value="pe">Couldn't wait for P.E.!</option>
						<option value="bio">Biology, ever since Bill Nye introduced me to science it has been my fav.</option>
						<option value="lang">Foreign language. It was so exocit! </option>
						<option value="geo">Geography: give me a map and I'm happy</option>
					</select>
				</div>
				<div class="form-group">
					<h2>Where will you live?</h2>
					<p>
						Okay, we've got spouse, kids, and career. Now, where will all of this be?
					</p>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="west" name="location">
							West Coast. I'm <i>California Dream'</i></label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="midwest" name="location">
							Give me the cornfields any day. I'm hoping for the Midwest!</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="south" name="location">
							Take me home to the south!</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="east" name="location">
							East Coast all the way!</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="overseas" name="location">
							I have wandering feet... I'd like to be overseas.</label>
					</div>
				</div>
				<div class="form-group">
					<h2>Almost done....</h2>
					<p>
						Great. We almost have all the data we need to see the future. Last question!
					</p>
					<label for="user">What is your name?</label>
					<input type="text" class="form-control" id="user">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>

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