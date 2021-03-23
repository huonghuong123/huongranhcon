<DOCTYPE!>
<html>
	<head>
		<title>exercise 2 </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		<?php
		$nameErr = $passwordErr = $userErr = "";
		$name = $password = $user = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    if (empty($_POST["name"])) {
		        $nameErr = "Username không được để trống !";
		    } else {
		        $name = test_input($_POST["name"]);
		    }

		    if (empty($_POST['password'])) {
		        $passwordErr = "Password không được để trống !";
		    } else {
		        $password = test_input($_POST["password"]);
		        if ($_POST['name'] == 'admin' || $_POST['password'] == 'admin') {
		            $user = "La Thị Hường ";
		        } else {
		            $userErr = "Lỗi đăng nhập !";
		        }
		    }
		}
		function test_input($data)
		{
		    $data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
		}
		?>
	</style>
	</head>
	<body>
		<div class="container">
		<div class="bg-info col-sm-8">
			<form action="login-success.php" method="post">
			    <div class="w-50 p-5 ">
			     
				        <input type='text' name='name' class='form-control bg-light' placeholder='Username' required>
				        <span class="text-danger"><?php echo $nameErr ?></span><br>
				        <input type='password' name='password' class='form-control bg-light' placeholder='Password' required>
				        <span class="text-danger"><?php echo $passwordErr ?></span><br>
				        <p><input type="checkbox" name="checkbox">Remember me</p>
				         <button type="submit" name="submit" class="btn btn-success">Login</button>
				        <span class="text-danger"><?php echo $userErr ?></span><br>
				        <br>
		    	</div>
			</form>
		</div>
	</div>

	</body>
</html>

