<?php   include 'included.php'; ?>
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
				<p>This assignment demonstrates the usage of the validation and sanitation filters found in PHP.</p>
                                <p>The program is able to recognize Integers, URLs code, HTML code, eMails, and ultimately strings. With this,
                                    it's possible to reduce the impact of inejcting SQL oor HTML code.</p>
			</div>
			
			<!-- Main content -->
			<div class="main">
				<h1>File sanitation</h1>
				<p>
                                    <?php
                                        $myfile = fopen("examples.txt", "r+") or die("Unable to open file!");
                                        $sanitizer = new sanitizeStrings();
                                        $countLinesRead = 0;
                                        while (!feof($myfile)) {
                                            $myLine = fgets($myfile);
                                            if (strlen($myLine) > 3) {
                                                $index = substr($myLine, 0, 2);
                                                $rest = substr($myLine, 3, strlen($myLine));
                                                if ($index === "12") {
                                                    $file = 'myPoem.html';
                                                    $current = $sanitizer->poemSanitizer($rest);
                                                    file_put_contents($file, $current);
                                                    echo '<br><br><a href="myPoem.html">Poem saved!</a>';
                                                }
                                                else {
                                                    echo '<br><br>';
                                                    $sanitized = $rest;
                                                    $firstChar = substr($sanitized, 0, 2);
                                                    if ($sanitizer->validateInt($firstChar)) {
                                                        $sanitizedLine = $sanitizer->sanitizeInt($sanitized);
                                                        echo ' Removing letters from this string --> <b>'.$sanitizedLine.'</b>';
                                                    }
                                                    else if (strpos($sanitized, '<') !== false) {
                                                        $sanitizedLine = $sanitizer->sanitizeHTML($sanitized);
                                                        echo ' The string with HTML code has been sanitized to <b>'.$sanitizedLine.'</b>';
                                                    }
                                                    else if ($sanitizer->validateEmail($sanitized)) {
                                                        $sanitizedLine = $sanitizer->sanitizeEmail($sanitized);
                                                        echo ' <a href="mailto:'.$sanitizedLine.'">Contact Fred!</a>';
                                                    }
                                                    else if ($sanitizer->validateURL($sanitized)) {
                                                        $sanitizedLine = $sanitizer->sanitizeURL($sanitized);
                                                        echo ' The string <b>'.$sanitized.'</b> is a URL, skipping...';
                                                    }
                                                    else if ($sanitizer->validateString($sanitized)) {
                                                        $sanitizedLine = $sanitizer->sanitizeString($sanitized);
                                                        echo ' The string <b>'.$sanitizedLine.'</b> cannot be validated, skipping...'; 
                                                    }
                                                }
                                            }
                                        }
                                        fclose($myfile);  
                                    ?>
				</p>
			</div>
		</div>
	
		<?php footer(); ?>
		
	</body>
</html>