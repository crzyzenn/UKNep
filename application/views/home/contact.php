<div class = "page-header" style="background: url('<?php echo base_url("mahatotech/assets/images/contactX.jpg"); ?>'); background-position: center; background-size: cover;">
	<div class = "page-header-caption">
	<h3>Book or call us</h3>
	<p>
		If you have any questions, please call us at 01403432047. We will be happy to help. We look forward to talking with you. 
		Or, Book your free consultation with our team today by filling out the form below. 
	</p>
</div>
</div>

<?php 
	
	if (isset($_SESSION['email_sent'])) {
		?>

		<div class="alert alert-success" role="alert">
			<?php echo $_SESSION['email_sent']; ?>
		</div>

		<?
	}
	

?>


<div class="jumbotron jumbotron-fluid bg-light">
	<div class="container text-center">
		<br>
		<?php echo form_open('contact/send', 'GET'); ?>
			<div class="form-group">
				
				<div class="col-sm-12">
					<?php echo form_input('fname', '', ['placeholder'=>'First name', 'class' => 'form-control']); ?>
					
					    <?php echo form_error('fname', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php echo form_input('lname', '', ['placeholder'=>'Last name', 'class' => 'form-control']); ?>
					<?php echo form_error('lname', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php echo form_input('email', '', ['placeholder'=>'example@example.com', 'class' => 'form-control']); ?>
					<?php echo form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php echo form_textarea('details', '', ['rows' => '10', 'cols' => '10', 'placeholder'=>'Enquiries', 'class' => 'form-control']); ?>
					<?php echo form_error('details', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
					
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-12 text-left">
					<button type="submit" class="btn btn-secondary">Submit</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="jumbotron jumbotron-fluid bg-white" id = "teamDiv"> 
		<div class = "container">
		  <h3 class="text-center font-weight-bold">Our Locations</h3>
		  

		  <div class="row">
		  	<div class="col-md-12 text-center text-muted">
		  	  	<div class = "div-location">
		  	  		<ul>
	  	  				<li><img src="<?php echo base_url('mahatotech/assets/images/london.jpg'); ?>"></li>
	  	  				<li><p><b>London</b></p></li>
	  	  				<li>
	  	  					<p>
	  	  						3 North Ash, Hawthorn Close, RH122BW, UK
	  	  						<br>
	  	  						01403432047
							</p>
						</li>	
	  	  				<li>
	  	  					<p>
	  	  						<a href="https://goo.gl/maps/eM6anR9Zbek" class="btn btn-outline-primary-inverse" target="_blank" style="padding: 0;">
	  	  							View Map
	  	  						</a>
	  	  					</p>
	  	  				</li>  	  				
		  	  		</ul>
		  	  	</div>
		  	</div>		  	
		  	<!-- <div class="col-md-6 text-center text-muted">
		  	  	<div class = "div-location">
		  	  		<ul>
	  	  				<li><img src="assets/images/nepal.jpg"></li>
	  	  				<li><p><b>Nepal</b></p></li>
	  	  				<li>
	  	  					<p>
	  	  						Forrest Ray
								191-103 Integer Rd.
								Corona New Mexico <br>08219
								(404) 960-3807
							</p>
						</li>	
	  	  				<li>
	  	  					<p>
	  	  						<a href="https://goo.gl/maps/HCFTmfndkRu" target = "_blank" class="btn btn-outline-primary-inverse" style="padding: 0;">
	  	  							View Map
	  	  						</a>
	  	  					</p>
	  	  				</li>  	  				
		  	  		</ul>
		  	  	</div>
		  	</div>	 -->
		  </div>
		  	
		</div>

	</div>


		


