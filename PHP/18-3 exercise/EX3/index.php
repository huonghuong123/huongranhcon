<DOCTYPE!>
<html>
	<head>
		<title>Exercise 1</title>
		<style type="text/css">
			.btn {		 	
			  	width: 100%;
			}
			.cmt{
				width: 100%;
				height: 80px;
			}
			.container {
				border-style: solid ;
				background-color: #f5f5f0;
				border-color: #f5f5f0;
				border-width: medium;
				padding: 20px;
  				margin: 20px;
  				width: 50%;
			}
			.dropdown {
				  position: relative;
				  display: inline-block;
			}
			.dropdown-content {
				  display: none;
				  position: absolute;
				  width: 100%;
				  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index: 1;
				}
		</style>
	</head>
	<body>
		<div class="container">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<label>	Text </label>
				<input type="text" name="text" placeholder="placeholder" class="btn"><br><br>
				<label>Check box</label><br>		
				<label><input type="checkbox" name="checkbox" value="" >Check box 1</label><br>
				<label><input type="checkbox" name="checkbox" value="" >Check box 2</label><br>
				<label><input type="checkbox" name="checkbox" value="" >Check box 3</label><br><br>
				<label>Textarea</label>
				<input type="text" name="text" class="cmt"><br><br>
				<label>Radio button</label><br>
				<label><input type="radio" name="radio">yep</label>
				<label><input type="radio" name="radio">nope</label>
				<label><input type="radio" name="radio">none</label><br><br>
				<label>Select</label><br>
				<div class="dropdown">
				  <button class="dropbtn">Option 1</button>
				  <div class="dropdown-content">
				  <a href="#">option 1</a>
				  <a href="#">option 2</a>
				  <a href="#">option 3</a>
				  </div>
				</div>
				<p>Upload files</p>
				<input type="file" name="image" value="Choose File">No file chosen<br><br>
				<input type="submit" name="submit" value="submit" class="btn" >
			</form>
		</div>
		<?php
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			  $uploadOk = 0;
			}
		?>
	</body>
</html>