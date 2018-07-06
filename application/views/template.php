<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/fontawesome-all.js"></script>
	<script type="text/javascript" src="assets/js/nav.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/hamburgers.css">

	<!-- Gallery -->
	<link href='assets/css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<!-- <link href='assets/css/demo.css' rel='stylesheet' type='text/css'> -->




</head>


<body>
	<script type="text/javascript">
		$('body').css({
			display: 'none'			
		});
		$('body').fadeIn(1000);

	</script>

	<nav class="navbar navbar-expand-md navbar-light navbar-fixed bg-white" id = "navbar">	
		<a class="navbar-brand" href="home"><img src="assets/images/Logo.png" class = "main-logo"></a>
		<button class="navbar-toggler" id = "toggle" type="button" data-toggle="collapse" data-target="#rv-header" aria-controls="rv-header" aria-expanded="false" aria-label="Toggle navigation">
			  <div class="hamburger hamburger--3dxy-r">
			    <div class="hamburger-box">
			      <div class="hamburger-inner"></div>
			    </div>
			  </div>
		</button>

		<div class="collapse navbar-collapse" id="rv-header">			
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" id = "home" href="home">Home <span class="sr-only">(current)</span></a>
				</li>

				<!-- Activate hyperlinks on pages except home -->
				<?php if (uri_string() == "director"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "overview" href="">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "services" href = "">Services</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link" id = "mission" href="">Mission</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Contact</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" id = "director" href="director">Director's Corner</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "gallery" href="gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "gallery" href="gallery"><i class = "fa fa-search"></i></a>
					</li>



				<?php elseif (uri_string() == "gallery"): ?>
					<li class="nav-item">
						<a class="nav-link" id = "overview" href="">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "services" href = "">Services</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link" id = "mission" href="">Mission</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "director" href="director">Director's Corner</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" id = "gallery" href="gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "gallery" href="gallery"><i class = "fa fa-search"></i></a>
					</li>

				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" id = "overview" href="">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "services" href = "">Services</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link" id = "mission" href="">Mission</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "contact" href="">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "director" href="director">Director's Corner</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id = "gallery" href="gallery">Gallery</a>
					</li>
					<li class="nav-item">
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
					</li>
						        
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




	
	<footer>
        <div class="jumbotron jumbotron-fluid bg-dark text-subtle">
			<div class="container">
<!-- 				<h1 class="display-3">"COME HOME TO QUALITY"</h1>
				<p class="text-muted">R.V. Consultancy & Construction Private Limited</p> -->

				<!-- Images Social Icons -->
				<!-- <div class = "row text-center">
					<div class = 'col-md-12' style="font-size:1.5em;">
						<span class="fab fa-facebook"></span>
						<span class="fab fa-instagram"></span>
						<span class="fab fa-twitter-square"></span>	
					</div>
					
				</div>
				<br>
				<br> -->

				<div class="row text-muted">
					
					<div class = 'col-md-4 text-left' id = "contactDiv">						
						<p class = "text-muted">
							Contact:<br>							
							Mobile: +977-9851004002, +977-9818154134 	<br>	
							        <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													
													<h5 class="modal-title font-weight-bold" id="gridModalLabel">Contact Information</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<table class="table table-hover text-left table-inverse">				
														<tbody>
															<tr>
																<td>Address</td>
																<td>
																	<p>1/19 Kha, Bhimmukteswor,
																	Ward No: - 11, Kalimati,
																	Kathmandu, Nepal</p>
																</td>
															</tr>
															<tr>
																<td>Email</td>
																<td>
																	<p>example@test.com</p>
																</td>
															</tr>
															<tr>
																<td>Website</td>
																<td>
																	<p>example.com</p>
																</td>
															</tr>
															<tr>
																<td>Mobile</td>
																<td>
																	<p>
																		+977-9851004002, +977-9818154134
																	</p>
																</td>
															</tr>
															<tr>
																<td>Telephone</td>
																<td>
																	<p>
																		+977-1-4270678, 4275185
																	</p>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
												</div>
											</div>
										</div>
									</div>
									<div class="bd-example bd-example-padded-bottom">
										<button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#gridSystemModal">
											<i class="fas fa-info"></i>
										</button>
									</div>


						</p>						
					</div>
					<div class = 'col-md-3 text-left'>											
						<p class="text-muted">&copy <?php echo date('Y'); ?> | All Rights Reserved</p>	
					</div>
					<div class = 'col-md-5 text-left'>						
						<ul class="list-inline footerLinks">
							<li class="list-inline-item">
								<a href="home" id = "home" class = "text-muted">Home</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "overview" href="">About Us</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "contact" href="">Contact</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "services" href="">Services</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "mission" href="">Mission</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "director" href="director">Director's Corner</a> | 
							</li>
							<li class="list-inline-item">
								<a class="text-muted" id = "gallery" href="gallery">Gallery</a>
							</li>
					<!-- 		<li class="list-inline-item">Contact | </li>
							<li class="list-inline-item">Services | </li>
							<li class="list-inline-item">Mission | </li>
							<li class="list-inline-item">Gallery</li> -->
						</ul>		
			
					</div>

				</div>


				
			</div>
		</div>
	</footer>	
	<script type="text/javascript" src="assets/js/simple-lightbox.js"></script>
	<script>
		$(function(){

    	
			
			var $gallery = $('.gallery a').simpleLightbox();

			$gallery.on('show.simplelightbox', function(){
				console.log('Requested for showing');
			})
			.on('shown.simplelightbox', function(){
				console.log('Shown');
			})
			.on('close.simplelightbox', function(){
				console.log('Requested for closing');
			})
			.on('closed.simplelightbox', function(){
				console.log('Closed');
			})
			.on('change.simplelightbox', function(){
				console.log('Requested for change');
			})
			.on('next.simplelightbox', function(){
				console.log('Requested for next');
			})
			.on('prev.simplelightbox', function(){
				console.log('Requested for prev');
			})
			.on('nextImageLoaded.simplelightbox', function(){
				console.log('Next image loaded');
			})
			.on('prevImageLoaded.simplelightbox', function(){
				console.log('Prev image loaded');
			})
			.on('changed.simplelightbox', function(){
				console.log('Image changed');
			})
			.on('nextDone.simplelightbox', function(){
				console.log('Image changed to next');
			})
			.on('prevDone.simplelightbox', function(){
				console.log('Image changed to prev');
			})
			.on('error.simplelightbox', function(e){
				console.log('No image found, go to the next/prev');
				console.log(e);
			});
		});

		$(document).ready(function(){
    		$('[data-toggle="popover"]').popover();   
		});
	</script>
	  <!-- <script>
	  /**
	   * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
	   *
	   * @private
	   * @author Todd Motto
	   * @link https://github.com/toddmotto/foreach
	   * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
	   * @callback requestCallback      callback   - Callback function for each iteration.
	   * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
	   * @returns {}
	   */
	    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

	    var hamburgers = document.querySelectorAll(".hamburger");
	    if (hamburgers.length > 0) {
	      forEach(hamburgers, function(hamburger) {
	        hamburger.addEventListener("click", function() {
	          this.classList.toggle("is-active");
	        }, false);
	      });
	    }
	  </script> -->

</body>




</html>