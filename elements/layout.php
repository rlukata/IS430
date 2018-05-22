<?php
	
	function headWeb() 
	{
		echo
			'
			<!-- Header -->
			<div class="header">
				<h1>IS 430</h1>
			</div>
			';
	}
		

    function navBar()
    {
        echo 
            '
			<!-- Nav bar -->
			<div class="navbar">
				<a href="index.php">Home</a>
				<a href="assignment1.php">Assignment 1</a>
				<a href="assignment2.php">Assignment 2</a>
				<a href="assignment3.php">Assignment 3</a>                                
				<a href="assignment4.php">Assignment 4</a>
                                <a href="assignment5.php">Assignment 5</a>
                                <a href="assignment6.php">Assignment 6</a>
                                <a href="assignment7.php">Assignment 7</a>
			</div>
			';
    }
	
    function footer()
    {
            echo '
                    <!-- Footer -->
                    <div class="footer">
                            <h2>
                                    <a href="mailto:rlukata@cityuniversity.edu">Contact me</a>
                            </h2>
                    </div>
                    ';
    }
?>