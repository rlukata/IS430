<?php	
    class vehicles
    {
        var $myVehicle;
        var $myArrayOfVehicles = array("car", "truck", "limousine", "motorcycle", "scooter", "boat", "plane");

        function set_vehicle($new_vehicle) 
        {
            $this->myVehicle = new_vehicle;
        }

        function get_vehicle()
        {
            return $this->myVehicle;
        }

        function echoVehicle($vehicle, $myArrayOfVehicles)
        {
            $this->checkVehicle($vehicle, $myArrayOfVehicles);
            echo '<br>Here is a '.$vehicle;
            echo '<br>';
        }

        function checkVehicle($vehicle, $myArrayOfVehicles)
        {
            if (in_array($vehicle, $myArrayOfVehicles)) return true;
            else throw new Exception($vehicle." is not a vehicle that we know");
        }
    }

    //create function with an exception
    function print_vehicle($vehicle)
    {							
        $myArrayOfVehicles = array("car", "truck", "limousine", "motorcycle", "scooter", "boat", "plane");

        $vehicles = new vehicles;							

        //trigger exception in a "try" block
        try {
            $vehicles->echoVehicle($vehicle, $myArrayOfVehicles);
        }

        //catch exception
        catch(Exception $e) {
            echo 'Error: '.$e->getMessage();
        }
    }
?>