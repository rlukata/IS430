<?php   include 'included.php'; ?>
<!DOCTYPE html>
<html>
	<head>
            <title>PHP Rami's Web</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style> <?php include 'css/main.css';?> </style>
	</head>
	
	<!-- Body -->
	<body>
		
            <?php headWeb() ?>

            <?php navBar(); ?>

            <!-- The content -->
            <div class="row">

                <!-- Side content -->
                <div class="side">
                    <h1>Queries:</h1>
                    <h4>Limited to 30 rows</h4>
                    <input type="radio" name="order" value="Date/Time" onclick="loadDoc('Databases/initialQuery.php')"> Order by Date/Time<br>
                    <input type="radio" name="order" value="Description" onclick="loadDoc('Databases/sortByDescription.php')"> Order by description<br>
                    <input type="radio" name="order" value="District Sector" onclick="loadDoc('Databases/sortByDistrictSector.php')"> Order by District Sector<br>
                    <br>
                    <h1>Views</h1>
                    <h3>Ordered by date/time</h3>
                    <h4>Limited to 30 rows</h4>
                    <input type="radio" name="order" value="Date/Time" onclick="loadDoc('Databases/addGroups.php')"> View groups and subgroups<br>
                    <input type="radio" name="order" value="Description" onclick="loadDoc('Databases/addLatLong.php')"> View longitude and latitude<br>
                    <input type="radio" name="order" value="District Sector" onclick="loadDoc('Databases/addAllInfo.php')"> View all information available
                </div>

                <!-- Main content -->
                <div class="main" id="loadDB">
                    <h1>The XMLHttpRequest Object</h1>
                    <h4>Limited to 30 rows</h4>
                    <button type="button" onclick="loadDoc('Databases/initialQuery.php')">Load database content</button>
                </div>

                <script>
                    function loadDoc($typeSort) {
                      var xhttp = new XMLHttpRequest();
                      xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("loadDB").innerHTML =
                          this.responseText;
                        }
                      };
                      xhttp.open("GET", $typeSort, true);
                      xhttp.send();
                    }
                </script>
            </div>

            <?php footer(); ?>
		
	</body>
</html>