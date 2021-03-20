<DOCTYPE!>
<html>
	<head>
		<title>exercise 2</title>
	</head>
	<body>
		<?php
			$_SERVER['PHP_SELF'];
			$str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';

			$tach = explode(" ",$str);
			print_r(array_count_values($tach));


			?>
			<?php
			if(isset($_POST['submit'])){
			    echo
			}
			?>
			<form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
	        <input type="text" name="guess" />
	        <input type="submit" value="submit" name="submit" />
		</form>
	</body>
</html>