<?php include('contact-script.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Web page title</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<?php include('header.php') ?>
				</div>
			</div>	
		</div>	
		<div class="container">	
			<div class="row mb-5">
				<div class="col-md-7">
					<h3 class="mb-4">Get in touch with us</h3>
					<div class="mb-3">
						<?php echo $response ?>
					</div>
					<div class="card p-5 mb-5">
						<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
							<div class="form-group">
								<input type="text"  class="form-control" name="name" placeholder="Full Name">
							</div>

							<div class="form-group">
								<input type="email"  class="form-control" name="email" placeholder="E-Mail">
							</div>

							
							
							<div class="form-group">
								<textarea class="form-control" name="message"  placeholder="Compose message"></textarea>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-info">SEND MESSAGE</button>
							</div>
							
						</form>
					</div>
					
				</div>	
				
				<div class="col-md-5">
					<h3 class="mb-4">Contact Information</h3>
					<h5 class="mb-4">Contact Address</h5>
					<p>
						Plot 123A Oxford Avenue<br>
						Egba-Tedo, Ajah<br>
						Lagos<br>
					</p>
					
					<h5 class="mb-4">Phones</h5>
					<p>
						+234-816-5432-452<br>
						+234-816-5432-451
					</p>
					
					<h5 class="mb-4">Email</h5>
					<p>
						hi@example.com
					</p>
					
					
				</div>
				
			</div>	
		</div>	
		
		
		<?php include('footer.php') ?>
	</body>
</html>


