
<?php
	

require("db.inc");

    // If form submitted, insert values into the database.
    if (isset($_REQUEST['hajjName'])){
		$hajjName = stripslashes($_REQUEST['hajjName']); // removes backslashes
		$hajjName = mysqli_real_escape_string($con,$hajjName); //escapes special characters in a string
		$gender=$_REQUEST['gender']; //Hajj table
		$age=$_REQUEST['age']; //Hajj table
		$country=$_REQUEST['country']; //Hajj table
		$language=$_REQUEST['language']; //Hajj table
		$camp=$_REQUEST['camp']; //Hajj table
		
		
		
		$trn_date = date("Y-m-d H:i:s"); // Today's date and time
        
		
		$query = "INSERT into `hajj` (hajjName, camp, gender, age, country, language) VALUES ('$hajjName', '$camp', '$gender','$age', '$country', '$language')"; //inserting into Hajj table
        $result = mysqli_query($con,$query);
		
        if($result) //if the query executed correctly
			echo "<h3>Hajj Name: $hajjName is registered successfully.</h3>";
		else
			echo "There is database problem, please try again later.";
	}
?>


