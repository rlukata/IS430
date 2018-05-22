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
			
			<!-- Main content -->
			<div class="main">
				<p>Hellow world in PHP: <?php echo '<p>Hello World</p>'; ?></p>
			</div>
		</div>
	
		<?php footer(); ?>
		
	</body>
</html>