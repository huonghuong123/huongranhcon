<DOCTYPE!>
<html>
	<head>
		<title>Exercise 1</title>
		<style type="text/css">
			.btn {
			  font-size: 1.0625em;
			  display: inline-block;
			  padding: 0.74em 1.5em;
			  margin: 1.5em 0 0;
			  color: white;
			  border-width: 0 0 0 0;
			  border-radius:5px;
			  background-color:blue;			 
			  font-family: 'Lato', sans-serif;			
			}
			.ridge {
				border-style: solid ;
				background-color: #f5f5f0;
				border-color: #f5f5f0;
				border-width: medium;
				padding: 50px;
  				margin: 20px;
  				width: 50%;
			}
		</style>
	</head>
	<body>
		<div class="ridge">
			<form action="" method="post">
				<h2>Select a file to upload</h2>
				<p><input type="file" name="fileToUpload" value="fileToUpload">only jpg, jpeg, png & gif files with maximum size 1 MB is allowed.</p>
				<button class="btn">Upload</button>
			</form>
		</div>
		<?php
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  echo "Sorry, only jpg, jpeg, png & gif files are allowed.";
			  $uploadOk = 1;
			}
		?>
	</body>
</html>