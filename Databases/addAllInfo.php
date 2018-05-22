<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

    <?php
        // Create connection                        
        $conn = new mysqli('localhost', 'rami', '', 'SchoolDatabase');

        // Check connection
        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT Event_Clearance_Date, Event_Clearance_Description, "
                . "District_Sector, Event_Clearance_Group, Event_Clearance_SubGroup,  "
                . "Longitude, Latitude FROM Incidents ORDER BY Event_Clearance_Date ASC LIMIT 0, 30";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            echo '<h1>Incidents by time and date ascending</h1>';
            echo "<table><tr><th>Date/Time</th><th>Description</th><th>District Sector</th>"
            . "<th>Group</th><th>Subgroup</th><th>Longitude</th>"
                    . "<th>Latitude</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . 
                        $row["Event_Clearance_Date"]. "</td><td>" . 
                        $row["Event_Clearance_Description"]. "</td><td>" . 
                        $row["District_Sector"]. "</td><td>" . 
                        $row["Event_Clearance_Group"]. "</td><td>" . 
                        $row["Event_Clearance_SubGroup"]. "</td><td>" . 
                        $row["Longitude"]. "</td><td>" . 
                        $row["Latitude"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();
    ?> 
        
    </body>
</html>