<DOCTYPE!>
<html>
	<head>
		<title>Exercise 2</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<?php
			$firstnameErr =$lastnameErr = $emailErr = $genderErr = $websiteErr = "";
			$firstname =$lastname = $email = $gender = $state = $website = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["firstname"])) {
			    $nameErr = "firstname is required";
			  } else {
			    $name = test_input($_POST["firstname"]);
			    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			      $nameErr = "firstname khong duoc de trong!";
			    }
			  }
			  if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["lastname"])) {
			    $nameErr = "lastname is required";
			  } else {
			    $name = test_input($_POST["lastname"]);
			    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			      $nameErr = "lastname khong duoc de trong!";
			    }
			  }
			  
			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			  } else {
			    $email = test_input($_POST["email"]);
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format";
			    }
			  }
			    
			  if (empty($_POST["website"])) {
			    $website = "";
			  } else {
			    $website = test_input($_POST["website"]);
			    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
			      $websiteErr = "Invalid URL";
			    }
			  }
			  if (empty($_POST["gender"])) {
			    $genderErr = "Gender is required";
			  } else {
			    $gender = test_input($_POST["gender"]);
			  }
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>
			<h2>Registration form</h2>
			 <div class="container">
		        <div class="row">
		            <div class="col-sm-4">
		                <div class="row">
		                    <div class="col bg-secondary">
		                        <h3>Featured</h3>
		                            <h3>Special title treatment</h3>
		                            <p>with supporting text below as a nature lead-in to additional content</p>
		                            <form action="#">
		                                <input type="search" name="search" id="search">
		                                <input type="button" class="bg-primary" value="search value" onclick="" placeholder="Go somewhere">
		                            </form>
		                    </div>
		                </div>                
		            </div>
            <div class="col-sm-8">
	                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				  firstName: <input type="text" name="fname" value="<?php echo $firstname;?>">
				  <span class="error">Firstname không được để trống <?php echo $firstnameErr;?></span>
				  <br><br>
				  lastName: <input type="text" name="fname" value="<?php echo $lastname;?>">
				  <span class="error">Lastname không được để trống <?php echo $lastnameErr;?></span>
				  <br><br>
				  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
				  <span class="error">Email không được để trống<?php echo $emailErr;?></span>
				  <br><br>
				  Gender:
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				  <span class="error"><?php echo $genderErr;?></span>
				  <br><br>
				  <input type="submit" name="submit" value="Submit">  
				</form>
	            </div>
	        </div>
	    </div>    
	</body>
</html>