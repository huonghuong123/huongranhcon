<DOCTYPE!>
<html>
	<head>
		<title>Exercise 2</title>
		<style>
			.error {
				color: #ff3300;
			}
			.btn {
			  font-size: 1.0625em;
			  display: inline-block;
			  padding: 0.74em 1.5em;
			  margin: 1.5em 0 0;
			  color: white;
			  border-width: 0 0 0 0;
			  background-color:blue;			 
			  font-family: 'Lato', sans-serif;
			  height: 50px;
			  width: 100%;	
			}
			.container {
				border-style: solid ;
				background-color: #2d2d86;
				border-color: #f5f5f0;
				border-width: medium;
				padding: 70px;
  				margin: 20px;
  				width :70%;
  			}
  			.form-control{
  				height: 30px;
				width: 100%;
				border: 1px solid
  			}
  			h2,h3{
  				color:white;
  			}
		</style>
	</head>
	<body>
		<div class="container" id="contact_form">
		 	<div class="contact row header">
				<form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					<h2>Create an acount</h2>			
					<input type="text" name="name" class="form-control" placeholder="Username" value=""><br><br>			
					<input type="email" name="email" class="form-control"  placeholder="Email" value=""><br><br>			
					<input type="password" name="password" class="form-control"  placeholder="Confirm Password" value=""><br><br>
					<h3 class="text-white">Select your avatar:<input type="submit" name="submit" value="Choose File">No file chosen</h3><br>
					<input type="submit" name="submit" value="Register" class="btn">
				</form>
			</div>
		</div>
		<?php
			$_FILES
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			  $uploadOk = 0;
			}
		?>
	</body>
</html>