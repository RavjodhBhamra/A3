<html>
<?php
 $Stuff = "";
	$Stuff = array("Casserole","Sandwich","Pie","Grill", "Surprise");
	print ("***Your Choice is **** <br />");
	for ($i=0; $i<5;$i++) 
	{
		if (isset($Stuff[$i]))   				
		{
			print ($Stuff[$i] . "<br/>");
		}	
		if (isset($Stuff[1]))
		{
			print($Stuff[1] . "<br/>");
		} 
		if(isset($Stuff[2]))
		{
			print($Stuff[2] . "<br/>");
		}
		if (isset($Stuff[3]))
		{
			print($Stuff[3] . "<br/>");
		} 
		if (isset($Stuff[4]))
		{
			print($Stuff[4] . "<br/>");
		} 
		else
		{
			print("You need to make a valid choice");
		}
		
	}
?>
</html>