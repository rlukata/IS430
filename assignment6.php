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
                            
			</div>
			
			<!-- Main content -->
			<div class="main">
                            <h1>Database manipulation</h1>
                            <form action="/IS430/databases/DBManipulation.php" method="post">
                                <div class="container">
                                    <p>Please fill in this form to create the first database.</p>

                                    <label for="CoursePrefix"><b>Course Prefix</b></label>
                                    <select name="CoursePrefix">
                                        <option value="CS">CS</option>
                                        <option value="ITMGMT">ITMGMT</option>
                                        <option value="MBA">MBA</option>
                                        <option value="IS">IS</option>
                                        <option value="CJ">CJ</option>
                                    </select>
                                    <br><br>
                                    <br>                                    
                                    <label for="CourseNumber"><b>Course number</b></label><br>
                                    <input class="signin" type="number" placeholder="Enter you course number" name="CourseNumber" maxlength="3" required>
                                    <br>
                                    <label for="CourseTitle"><b>Course Title</b></label>
                                    <input class="signin" type="text" placeholder="Enter your course title" name="CourseTitle" maxlength="254" required>

                                    <label for="CourseDescription"><b>Course Description</b></label>
                                    <input class="signin" type="text" placeholder="Enter your course description" name="CourseDescription" required>

                                    <label for="Term"><b>Term</b></label>
                                    <select name="Term">
                                        <option value="Summer">Summ</option>
                                        <option value="Fall">Fall</option>
                                        <option value="Winter">Wint</option>
                                        <option value="Spring">Spri</option>
                                    </select>
                                    <br><br>
                                    <label for="ClassType"><b>Class Type</b></label>
                                    <select name="ClassType">
                                        <option value="On-line">On-line</option>
                                        <option value="InClass">InClass</option>
                                        <option value="Mixed-Mode">Mixed-Mode</option>
                                    </select>

                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
		</div>
	
		<?php footer(); ?>
		
	</body>
</html>