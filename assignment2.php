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
				<?php date_default_timezone_set("America/Los_Angeles"); ?>
				<h3><?php echo "Date (Seattle) ".date("F d, Y"); ?></h3>
				<h3><?php echo "Time: " .date("h:i:sa"); ?></h3>
				<br>
				<h3>The date 15 days from now is <?php echo DateInFifteenDays(); ?></h3>
				<h3>The date 2 weeks from now is <?php echo DateInTwoWeeks(); ?></h3>
				<br>
				<?php date_default_timezone_set("Asia/Bangkok"); ?>
				<h3><?php echo "Date (Bangkok) ".date("F d, Y"); ?></h3>
				<h3><?php echo "Time: " .date("h:i:sa"); ?></h3>
			</div>
			
			<!-- Main content -->
			<div class="main">
				<h1>Arithmetic operations</h1>
				<p><?php echo "125 + 78 = ".(125 + 78) ?></p>
				<p><?php echo "125 - 78 = ".(125 - 78) ?></p>
				<p><?php echo "5 * 3 = ".(5 * 3) ?></p>
				<p><?php echo "5 ^ 3 = ".pow(5,3) ?></p>
				<br>
				<h1>Functions that use scope, and function calling...</h1>
				<p><?php echo 'Fibonacci of 20 = '.getFib(20); ?></p>
				<p>Fibonacci sequence of size 10: <?php echo fiboSeq(10); ?></p>
				<br>
				<h1>Strings and Arrays</h1>
				<p><?php echo '<pre>'; print_r($languages); echo '<pre>'; ?></p>
			</div>
			
		</div>
	
		<?php footer(); ?>
		
	</body>
</html>