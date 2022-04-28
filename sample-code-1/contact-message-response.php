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
				<div class="col-md-12">
					<h4 class="mb-3">Guest Message Status</h4>
					<div class="card p-5">
						<?php echo $response; ?>
					</div>	
				</div>	
			</div>	
		</div>	
		
		
		<?php include('footer.php') ?>
	</body>
</html>