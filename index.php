<?php include 'included.php'; ?>

<?php
    require_once("vendor/pear/auth/Auth/HTTP.php");
    // Designate authentication credentials, table name,
    // username and password columns, password encryption type,
    // and query parameters for retrieving other fields
    $dblogin = array (
        'dsn' => "mysqli://webuser:secret@localhost/SchoolDatabase",
        'table' => "logins",
        'usernamecol' => "rami",
        'passwordcol' => "BDD1176F2BE244B34CA863326198D0F0",
        'cryptType' => "md5",
        'db_fields' => "*"
    );
    // Instantiate Auth_HTTP
    $auth = new Auth_HTTP("MDB2", $dblogin) or die("Can't connect!");
    // Message to provide in case of authentication failure
    $auth->setCancelText('Authentication credentials not accepted!');
    // Begin the authentication process
    $auth->start();
    // Check for credentials. If not available, prompt for them
    if($auth->getAuth())
    echo "Welcome, {$auth->getAuthData('username')}<br />";
?> 

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
				<p>Hi, my name is Rami Lukata. Welcome to my website.</p>
			</div>
			
			<!-- Main content -->
			<div class="main">
				<p>This is a locally stored web-server, where I'll be creating my website for IS 430.</p>
			</div>
		</div>
		
		<?php footer(); ?>
		
	</body>
</html>