
<?php
	

require("db.inc");

    // If form submitted, insert values into the database.
    if (isset($_REQUEST['guider'])){
		$guider = stripslashes($_REQUEST['guider']); // removes backslashes
		$guider = mysqli_real_escape_string($con,$guider); //escapes special characters in a string
		$guiderNumber = stripslashes($_REQUEST['guiderNumber']); // removes backslashes
		$guiderNumber = mysqli_real_escape_string($con,$guiderNumber); //escapes special characters in a string
		
		
		$campName=$_REQUEST['camp']; //camp table
		
		
		$trn_date = date("Y-m-d H:i:s"); // Today's date and time
		
		$query = "INSERT into `guider` (guider, guiderNumber, campName) VALUES ('$guider', '$guiderNumber', '$campName')"; //inserting into camp table
        $result = mysqli_query($con,$query);
		
        if($result) //if the query executed correctly
			echo "<h3>guider information is registered successfully.</h3>";
		else
			echo "There is database problem, please try again later.";
	}
?>


