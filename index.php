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
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="insertHajj.php" method="post">
				<span class="contact1-form-title">
					أدخل بيانات الحاج
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<p style="text-align: right;"><strong>Name</strong></p>
					<input class="input1" type="text"  placeholder="Enter hajjName" name="hajjName" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input">
					<p style="text-align: right;"><strong>Age</strong></p>
					<input class="input1" type="text"  placeholder="Enter age" name="age" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<p style="text-align: right;"><strong>campaign</strong></p>
					<input class="input1" type="text"  placeholder="Enter Camp name" name="camp" required>
					<span class="shadow-input1"></span>
				</div>
	
				
				
					<p style="text-align: right;"><strong>Sex</strong><br/>
					<input style='margin-right:68px;' type="radio"  name="gender" value="male" checked>Male<br/>
					<input  style='margin-right:50px;'  type="radio"  name="gender" value="famale">Famale<br/>	
     
	  <br/>
	  
	  
	    
	  
	  <?php 
	  require("db.inc");
	  // mysql select query
		$query = "SELECT * FROM `apps_countries`";
		$result = mysqli_query($con, $query);
		
			echo "<p style='text-align: right;'><strong>Country</strong><br/>";
			echo "<select name='country'  style='width:200px;'>";
            while($row = mysqli_fetch_array($result)){
            echo "<option value='$row[2]'>$row[1] $row[2]</option>";
            } 
			echo "</select><br/>";
			
			
			
			// mysql select query
		$query1 = "SELECT * FROM `languages`";
		$result1 = mysqli_query($con, $query1);
		
			echo "<p style='text-align: right;'><strong>Language</strong><br/>";
			echo "<select name='language' style='width:200px;'>";
            while($row = mysqli_fetch_array($result1)){
            echo "<option value='$row[1]'>$row[1] $row[2]</option>";
            } 
			echo "</select><br/>";
			?>
        
				
				
				
<br>
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							إحفظ البيانات
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
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
