<DOCTYPE!>
<html>
	<head>
		<title>exercise </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
			.btn {
			  display: inline-block;
			  color: white;
			  border-width: 0 0 0 0;
			  border-radius:5px;
			  background-color:#66ff99;			 
			  height: 50px;
			  width: 100%;				
			}
		</style>
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
	</head>
	<body>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
		    <div class="w-50 p-5 ">
		        <div class="text-center bg-success p-3 rounded">
		            <h1>Signin:</h1>
		        </div><br>
		        <input type='text' name='name' class='form-control bg-light' placeholder='Username'>
		        <span class="text-danger"><?php echo $nameErr ?></span><br>
		        <input type='password' name='password' class='form-control bg-light' placeholder='Password'>
		        <span class="text-danger"><?php echo $passwordErr ?></span><br>
		        <input type='submit' value='lognin' name='lognin' class='btn'>
		        <span class="text-danger"><?php echo $userErr ?></span><br>
		        <br>
		    </div>
	
		</form>
	</body>
</html>