<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- CUSTOM CSS FILES GO HERE -->
		<link type="text/css" href="css/style.css" rel="stylesheet"/>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- js-cookie -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!-- JQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript (all compiled plugins included) -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<title>Bootstrap Testing Grounds</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<i class="fa fa-space-shuttle fa-lg"></i>
						&nbsp;Starship Enterprise
					</a>
				</div>
				<ul class="nav navbar-nav pull-right">
					<li><a href="#"><i class="fa fa-crosshairs"></i>&nbsp;Weapons</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						   aria-expanded="false"><i class="fa fa-shield"></i>&nbsp;Shields <span
								class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-hourglass"></i>&nbsp;Full</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><i class="fa fa-hourglass-start"></i>&nbsp;Front</a></li>
							<li><a href="#"><i class="fa fa-hourglass-end"></i>&nbsp;Rear</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-wrench"></i>&nbsp;Engines</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron enterprise">
				<div class="row">
					<div class="col-md-12">
						<h1>Resist!</h1>

						<p>The Federation's gone; the Borg is everywhere!</p>

						<p>
							<a class="btn btn-danger btn-lg" href="https://www.youtube.com/watch?v=RrG4JnrN5GA"
							   role="button">
								Make it so
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="img/resistance.png" class="img-responsive center-block"/>
				</div>
				<div class="col-md-3">
					<blockquote class="blockquote-reverse">
						<p><i class="fa fa-hand-spock-o fa-lg"></i>&nbsp;Live long, and prosper.</p>
						<footer>Spock</footer>
					</blockquote>
				</div>
				<div class="col-md-3">
					<p>
						Sensors indicate human life forms 30 meters below the planet's surface. Stellar flares are
						increasing in magnitude and frequency. Set course for Rhomboid Dronegar 006, warp seven. There's
						no
						evidence of an advanced communication network. Total guidance system failure, with less than 24
						hours' reserve power. Shield effectiveness has been reduced 12 percent. We have covered the area
						in
						a spherical pattern which a ship without warp drive could cross in the given time.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 big-text">
					<p class="margin-reset">
						When has justice ever been as simple as a rule book? The game's not big enough unless it scares
						you
						a little. You're going to be an interesting companion, Mr. Data. This is not about revenge. This
						is
						about justice. Mr. Crusher, ready a collision course with the Borg ship. Now we know what they
						mean
						by 'advanced' tactical training. I'll be sure to note that in my log. Damage report! Fear is the
						true enemy, the only enemy. Our neural pathways have become accustomed to your sensory input
						patterns. Well, that's certainly good to know. Wait a minute - you've been declared dead. You
						can't
						give orders around here. Some days you get the bear, and some days the bear gets you. About four
						years. I got tired of hearing how young I looked. Talk about going nowhere fast. and attack the
						Romulans. This should be interesting. Maybe if we felt any human loss as keenly as we feel one
						of
						those close to us, human history would be far less bloody. Sorry, Data. Maybe we better talk out
						here; the observation lounge has turned into a swamp. We know you're dealing in stolen ore. But
						I
						wanna talk about the assassination attempt on Lieutenant Worf. And blowing into maximum warp
						speed,
						you appeared for an instant to be in two places at once. I can't. As much as I care about you,
						my
						first duty is to the ship. A lot of things can change in twelve years, Admiral. Worf, It's
						better
						than music. It's jazz.
					</p>
				</div>
			</div>
		</div>
	</body>
</html>