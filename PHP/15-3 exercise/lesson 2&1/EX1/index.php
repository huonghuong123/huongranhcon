<DOCTYPE!>
<html>
	<head>
		<title>exercise </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
		            $user = "Luna";
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
		<form action="login.php" method="post">
		    <div class="w-50 p-5">
		        <div class="text-center">
		            <h1>Login:</h1>
		        </div><br>
		        <input type='text' name='name' class='form-control bg-light' placeholder='Username' required>
		        <span class="text-danger"><?php echo $nameErr ?></span><br>
		        <input type='password' name='password' class='form-control bg-light' placeholder='Password'>
		        <span class="text-danger"><?php echo $passwordErr ?></span><br>
		        <input type='submit' value='signin' name='signin'>
		         <input type='reset' value='reset' name='reset'>
		        <span class="text-danger"><?php echo $userErr ?></span><br>
		        <br>
		    </div>
		</form>
	</body>
</html>