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
					<div class="card p-5">
						<form method="POST" action="procesing-script.php">
							<div class="form-group">
								<input type="text"  class="form-control" name="name" placeholder="Name">
							</div>

							<div class="form-group">
								<input type="email"  class="form-control" name="email" placeholder="E-Mail">
							</div>

							<div class="form-group">
								<input type="number" min="1" class="form-control" name="age" placeholder="Age">
							</div>

							<div class="form-group">
								<select class="form-control" name="gender" >
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-info">SUBMIT</button>
							</div>
							
						</form>
					</div>
					
				</div>	
				
			</div>	
		</div>	
		
		
		<?php include('footer.php') ?>
	</body>
</html>


