<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CascadeStyle.css">
        <div class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <img class="img-responsive center-block" style="float:right; width:300px; height:150px;">
                </div>

            </div>
        </div>
    </head>

    <body>
        <div id="container">
            
            <div id="header">
                <h1> Welcome to school database creation</h1>
            </div>
            
            <div id="body">
                <?php
                $firstName = $_POST["FName"];
                $lastName = $_POST["LName"];
                $zipCode = $_POST["ZipCode"];
                $userEmail = $_POST["email"];
                $phoneNumber = $_POST["PhoneNumber"];
                $userPassword = $_POST["psw"];
                $user2Password = $_POST["psw-repeat"];


                echo "First Name: $firstName<br>";
                echo "Last Name: $lastName<br>";
                echo "Zip Code: $zipCode<br>";
                echo "E-mail: $userEmail<br>";
                echo "Phone Number: $phoneNumber<br>";
                echo "Your Password: $userPassword<br>";
                echo "Your 2nd Password: $user2Password<br>";

                ValidateUserPassword($userPassword, $user2Password);
                CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword);
                echo "</br></br>";


                /* Functions go here */
                function ValidateUserPassword($userPassword, $user2Password)
                {
                        if ($userPassword !== $user2Password)
                        {
                                echo "Ooops, passwords do not match! Please try again! <br>";
                                exit;
                        }
                }


                function CreateMySQLUser($firstName, $lastName, $zipCode, $userEmail, $phoneNumber, $userPassword)
                {
                        echo "<b>Creating User: <i>$firstName $lastName</i></b><br>";
                        // Create connection
                        $conn = new mysqli('localhost', 'root', '', 'CourseTable');
                        $conn2 = new mysqli('localhost', 'root', '', 'ScheduleTable');
                        
                        // Check connection
                        if ($conn->connect_error)
                        {
                                die("Connection failed: " . $conn->connect_error);
                        } 
                        echo "<b>Connection to MySQL DB established!</b> <br>";
                        $sql = "INSERT INTO users (FName, LName, ZipCode, Email, PhoneNumber, Password)
                        VALUES ('$firstName' , '$lastName', '$zipCode', '$userEmail', '$phoneNumber', '$userPassword')";

                        echo "SQL Statemet: $sql <br>";
                        if ($conn->query($sql) === TRUE)
                        {
                                echo "<b>New record created successfully</b><br>";
                        }
                        else
                        {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();	
                }

                ?>
                <br><br>
                <a href="index.php">Go back to the main page</a>
            </div>
        </div>
    </body>
</html> 