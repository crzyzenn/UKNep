<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/fontawesome-all.js"></script>
	<script type="text/javascript" src="assets/js/nav.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>


<body>
	<script type="text/javascript">
		$('body').css({
			display: 'none'			
		});
		$('body').fadeIn(500);

	</script>
	
	
		<nav class="navbar navbar-fixed navbar-expand-md navbar-dark bg-default" id = "navbar">	
		<a class="navbar-brand" href="home"><img src="assets/images/Logo.png" class = "main-logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#rv-header" aria-controls="rv-header" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="rv-header">
			<ul class="navbar-nav float-md-right">
				<li class="nav-item">
					<a class="nav-link" id = "home" href="home">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id = "overview" href="">Basic Overview</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id = "services" href = "">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id = "director" href="">Director's Corner</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id = "mission" href="">Mission</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id = "contact" href="">Contact</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				<!-- </li> -->
			</ul>
			<!-- <form class="form-inline my-2 my-md-0">
				<input class="form-control" type="text" placeholder="Search">
			</form> -->
		</div>
	</nav>


	<!-- Content Area -->

	<?php echo $content; ?>


	<!-- End of Content Area -->




	
	<footer>
        <div class="jumbotron jumbotron-fluid bg-dark text-subtle">
			<div class="container text-center">
				<h1 class="display-3">"COME HOME TO QUALITY"</h1>
				<p class="text-muted">R.V. Consultancy & Construction Private Limited</p>

				<!-- Images Social Icons -->
				<div class = "row text-center">
					<div class = 'col-md-12' style="font-size:1.5em;">
						<span class="fab fa-facebook"></span>
						<span class="fab fa-instagram"></span>
						<span class="fab fa-twitter-square"></span>	
					</div>
					
				</div>
				<br>
				<br>
				<p class = "text-muted">
					<a href="#contactDiv" class = "page-link text-muted">Contact Us</a>
					
					<p class="text-muted">All Rights Reserved</p>
				</p>
			</div>
		</div>
	</footer>


</body>


</html>