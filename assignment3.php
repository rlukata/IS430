<?php include 'included.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Rami's Web</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style><?php include 'css/main.css';?></style>
	</head>
	
	<!-- Boddy -->
	<body>
		
		<?php headWeb() ?>
		
		<?php navBar(); ?>
		
		<!-- The content -->
		<div class="row">
		
			<!-- Side content -->
			<div class="side">
				<p>This assignment demonstrates the usage of OOP and exception catching. In the example
				shown, variables car, truck, and boat are defined in the system, therefore they don't throw 
				error. However, hydroplane was never defined, which throws an error indicating the vehicle 
				is not in the system.</p>
			</div>
			
			<!-- Main content -->
			<div class="main">
				<h1>Object handling</h1>
				<p>
					<?php 
						$car = "car";
						$truck = "truck";
						$boat = "boat";
						$hydroplane = "hydroplane";
						
						echo '<br> Testing '.$car;
						print_vehicle($car);
						
						echo '<br> Testing '.$truck;
						print_vehicle($truck);
						
						echo '<br> Testing '.$boat;
						print_vehicle($boat);
						
						echo '<br> Testing '.$hydroplane;
						echo '<br>';
						print_vehicle($hydroplane);
					?>
				</p>
			</div>
		</div>
	
		<?php footer(); ?>
		
	</body>
</html>