<!-- PHP functions -->
<?php
		
	function getFib($n)
	{
		return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
	}
	
	function fiboSeq($size) 
	{
		$x = 0;    
		$y = 1; 

		for($i=0;$i<=$size;$i++)    
		{    
			$z = $x + $y;    
			echo $z.", ";         
			$x=$y;       
			$y=$z;     
		}
	}
	
	function DateInFifteenDays() 
	{
		$future = strtotime("+15 days");
		echo date("F d, y", $future);
	}
	
	function DateInTwoWeeks() 
	{
		$future = strtotime("+2 weeks");
		echo date("F d, y", $future);
	}
		
	
	$languages = array("English" => "England", "French" => "France", 
		"German" => "Germany", "Spanish" => "Spain");
		
	$countries = array("England", "France", "Germany", "Spain");
?>