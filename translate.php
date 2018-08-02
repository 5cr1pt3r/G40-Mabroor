<!DOCTYPE html>
<html lang="en">
<head>
	<title>مبرور - قاعدة البيانات</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    
}
</style>

</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			
			
			<div style='text-align:center;'><br/>
			<strong>الموقع الحالي للمطوف</strong><br/>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.7027211234305!2d39.155950760472074!3d21.616554938640796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d0a876494b67%3A0x8a988d5c842d2263!2sJeddah+International+Exhibition+%26+Convention+Center!5e0!3m2!1sen!2ssa!4v1533239828553" width="800px" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
			
			<div class="wrap-input1 validate-input">
<?php require("db.inc");
$query = "SELECT * FROM `hajj` where id=1";
		$result = mysqli_query($con, $query);
		echo "<center><table  id='customers' style='padding:50px;'>";
			while($row = mysqli_fetch_array($result)){
			echo "<tr><th>Name:</th><td> $row[1] </td></tr>";
			echo "<tr><th>Campaign:</th><td> $row[2] </td></tr>";
			echo "<tr><th>Age:</th><td> $row[3] </td></tr>";
			echo "<tr><th>Sex:</th><td> $row[4] </td></tr>";
			echo "<tr><th>Country:</th><td> $row[5] </td></tr>";
			echo "<tr><th>Language:</th><td> $row[6] </td></tr>";
			   } 
?>

</center></table>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

