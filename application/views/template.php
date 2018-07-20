<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="NOODP">
	<title><?php echo 'MahatoTech | '. $title; ?></title>
	<?php echo $metas; ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('mahatotech/favicon.ico'); ?>">
	<script type="text/javascript" src="<?php echo base_url('mahatotech/assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('mahatotech/assets/js/all.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('mahatotech/assets/js/nav.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('mahatotech/assets/js/bootstrap.bundle.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('mahatotech/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('mahatotech/assets/css/hamburgers.css'); ?>">

	<!-- Structured data -->
	<script type='application/ld+json'>
	{"@context":"https:\/\/schema.org","@type":"Organization","url":"http:\/\/mahato.co.uk\/","name":"MahatoTech Ltd","logo":"http://localhost/mahatotech/favicon.ico"}
	</script>

	<script type='application/ld+json'>
		{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/mahato.co.uk\/","name":"Web designer - App developer - Ecommerce UK - MahatoTech","potentialAction":{"@type":"SearchAction","target":"https:\/\/mahato.co.uk\/?s={search_term_string}","query-input":"required name=search_term_string"}}
	</script>



</head>




<body>
	<script type="text/javascript">
		$('body').css({
			display: 'none'			
		});
		$('body').fadeIn(1000);

	</script>

	<nav class="navbar navbar-expand-md navbar-light navbar-fixed bg-white" id = "navbar">	
		<a class="navbar-brand" href="<?php echo base_url('') ?>"><img src="<?php echo base_url('mahatotech/assets/images/Logo.png'); ?>" class = "main-logo"></a>
		<button class="navbar-toggler" id = "toggle" type="button" data-toggle="collapse" data-target="#rv-header" aria-controls="rv-header" aria-expanded="false" aria-label="Toggle navigation">
			  <div class="hamburger hamburger--3dxy-r">
			    <div class="hamburger-box">
			      <div class="hamburger-inner"></div>
			    </div>
			  </div>
		</button>

		<div class="collapse navbar-collapse" id="rv-header">			
			<ul class="navbar-nav">

				<!-- Home Dropdown menu -->
				<!-- <li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="home" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<div class="dropdown-menu" aria-labelledby="home">
							<a class="dropdown-item" href="" id="overview">Overview</a>
							<a class="dropdown-item" href="" id="services">Services Offered</a>
							<a class="dropdown-item" href="" id="team">Teams</a>
							<a class="dropdown-item" href="" id="engagement">Engagement</a>
							<a class="dropdown-item" href="" id="offices">Our offices</a>
						</div>
					</li>
				</li> -->

				<!-- Activate hyperlinks on pages except home -->
				<?php if (uri_string() == "about"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('contact'); ?>">Contact</a>
					</li>

				<?php elseif (uri_string() == "ecommerce"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('contact'); ?>">Contact</a>
					</li>


				<?php elseif (uri_string() == "mobile-app"): ?>
					<li class="nav-item active">
						<a class="nav-link" id = "" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('contact'); ?>">Contact</a>
					</li>



				<?php elseif (uri_string() == "site"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('contact'); ?>">Contact</a>
					</li>	



				<?php elseif (uri_string() == "contact"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" id = "<?php echo base_url('contact'); ?>" href="contact">Contact</a>
					</li>

				<?php else: ?>			
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('mobile-app'); ?>">Mobile app</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('site'); ?>">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('ecommerce'); ?>">eCommerce</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Our work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "about" href="<?php echo base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="<?php echo base_url('contact'); ?>">Contact</a>
					</li>


					<!-- Search -->
<!-- 					<li class="nav-item">
						  <a href = "#" id = "search" class="nav-link" onclick = "return false;" data-toggle="popover" data-html = "true" data-placement = "bottom" data-content='<div class="row">
									<div class="col-lg-12">
										<div class="input-group">
											<input type="text" class="form-control form-control-sm" placeholder="Search Something">
											<span class="input-group-btn">
												<button class="btn btn-sm btn-secondary" type="button">Go!</button>
											</span>

										</div>
									</div>
								</div>'><i class = "fa fa-search"></i></a>
					</li> -->

						        
					</li>

				<?php endif; ?>
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




	
	<footer class="bg-dark text-muted-custom">
		<div class = "footer-div" id = "officesDiv">
			<b class="text-muted-custom">OUR OFFICES</b>
			<div class = "row">
				<!-- Contact Details -->
				<div class = "col-sm-2 text-muted">
					<p>Mahatotech Ltd</p>
					<p>3 North Ash, Hawthorn Close, RH122BW, UK</p>
					<p>01403432047</p>

				</div>
				<!-- <div class = "col-sm-2 text-muted">					
					<p>Forrest Ray 191-103 Integer Rd. Corona New Mexico 
08219 (404) 960-3807</p>
					<p>08219 (404) 960-3807</p>
				</div> -->
			</div>
			<br>

			<!-- Footer information -->
			<div class = "row">
				<!-- Links -->
				<div class = "col-sm-4">
					<ul class="list-inline footerLinks font-weight-bold">
						<li class="list-inline-item">
							<a class = "text-muted-custom" href="<?php echo base_url('mobile-app') ?>">Mobile app</a>  
						</li>
						<li class="list-inline-item">
							<a class="text-muted-custom" href="<?php echo base_url('site') ?>">Website</a>  
						</li>
						<li class="list-inline-item">
							<a class="text-muted-custom" href="<?php echo base_url('ecommerce') ?>">eCommerce</a>  
						</li>						
						<li class="list-inline-item">
							<a class="text-muted-custom" href="">Our work</a>  
						</li>
						<li class="list-inline-item">
							<a class="text-muted-custom" href="<?php echo base_url('about') ?>">About</a> 
						</li>
						<li class="list-inline-item">
							<a class="text-muted-custom" href="<?php echo base_url('contact') ?>">Contact</a>  
						</li>
					</ul>	
				</div>

				<!-- Copyright -->
				<div class = "col-sm-4 font-weight-bold text-center">
					<p>&copy <?php echo date('Y'); ?> MahatoTech Ltd</p>	
				</div>

				<!-- Media icons -->

				<div class = "col-sm-4 text-right">
					<ul class="list-inline footerLinks font-weight-bold">
						<li class="list-inline-item">
							<i class="fab fa-facebook-f"></i>
						</li>
						<li class="list-inline-item">
							<i class="fab fa-instagram"></i>
						</li>
						<li class="list-inline-item">
							<i class="fab fa-twitter"></i>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>

			
	</footer>


	<!-- This website is under construction message -->	
	<div class="alert alert-warning alert-dismissible fixed-bottom text-center" style = "margin-bottom: 0;" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		<i class="fas fa-exclamation-triangle"></i> This site is under construction. Some features might not be working!
	</div>



</body>




</html>