<?php
    $CoursePrefix = isset($_POST["CoursePrefix"]) ? $_POST["CoursePrefix"]: ' ';
    $CourseNumber = isset($_POST["CourseNumber"]) ? $_POST["CourseNumber"]: ' ';
    $CourseTitle = isset($_POST["CourseTitle"]) ? $_POST["CourseTitle"]: ' ';
    $CourseDescription = isset($_POST["CourseDescription"]) ? $_POST["CourseDescription"]: ' ';
    $Term = isset($_POST["Term"]) ? $_POST["Term"]: ' ';
    $ClassType = isset($_POST["ClassType"]) ? $_POST["ClassType"]: ' ';

    CourseTableMySQL($CoursePrefix, $CourseNumber, $CourseTitle, $CourseDescription);
    ScheduleTableMySQL ($Term, $ClassType);

    function CourseTableMySQL($CoursePrefix, $CourseNumber, $CourseTitle, $CourseDescription)
    {
        // Create connection                        
        $conn = new mysqli('localhost', 'rami', '', 'SchoolDatabase');

        // Check connection
        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO CourseTable (CoursePrefix, CourseNumber, CourseTitle, CourseDescription)
        VALUES ('$CoursePrefix', '$CourseNumber', '$CourseTitle', '$CourseDescription');";
        if (($conn->query($sql)) === TRUE){
            echo 'Successfully added to DB';            
        }
        else {
		echo "<br><b>Error: " . $sql . "</b><br>" . $conn->error;
	}

        $conn->close();	
    }
    
    function ScheduleTableMySQL ($Term, $ClassType) {
        
        // Create connection                        
        $conn = new mysqli('localhost', 'rami', '', 'SchoolDatabase');

        // Check connection
        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT Max(CourseID) FROM coursetable;";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        $courseID = array_values($row)[0];
        
        $sql2 = "INSERT INTO ScheduleTable (Term, ClassType, CourseID) VALUES ('$Term', '$ClassType', '$courseID');";        
        if (($conn->query($sql2)) === TRUE){
            echo 'Successfully added to DB<br>';
            echo '<a href="../assignment6.php">Go back.</a>';
        }        
        else {
		echo "<br><b>Error: " . $sql2 . "</b><br>" . $conn->error;
	}

        $conn->close();	
    }

?>