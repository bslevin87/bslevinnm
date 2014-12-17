<?php
session_start();
require_once("csrf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Brendan Slevin</title>

	<!-- Bootstrap core CSS -->
	<link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css1.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="navbar-static-top.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="contact.js"></script>
</head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home-page.html">Brendan Slevin</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="home-page.html">Home</a></li>
				<li><a href="resume1.html">My Resume</a></li>
				<li><a href="portfolio1.html">My Portfolio</a></li>
				<li class="active"><a href="contact.php">Contact Me</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<body role="document">
<div class="container theme-showcase" role="main">
	<article>
		<div class="page-header">
			<h1>Contact Me</h1>

		</div>
		<form id="contactForm" method="post" action="contact-form-processor.php">
			<?php echo generateInputTags(); ?>
			<p>
				<label for="name">Name</label><br />
				<input type="text" id="name" name="name" size="32" placeholder="Enter your name" />
			</p>
			<p>
				<label for="email">Email</label><br />
				<input type="text" id="email" name="email" size="32" placeholder="Enter your Email Address" />
			</p>

			<p>
				<label for="message">Message</label><br />
				<textarea id="message" name="message" cols="32" rows="8" placeholder="Enter your message here"></textarea>
			</p>
			<p>
				<label>Submit</label><br />
				<button id="contactUs" class="btn btn-primary" type="submit">Send</button>
				<button class="btn btn-primary" type="reset">Clear</button>
			</p>
		</form>
		<p id="outputContactUs"></p>
	</article>
</div>
</body>
</body>
</html>