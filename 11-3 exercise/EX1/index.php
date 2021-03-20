<DOCTYPE!>
<html>
	<head>
		<title>exercise 1</title>
	</head>
	<body>
		<?php
			$str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
			$tach = explode(" ",$str);
			print_r(array_count_values($tach));
		?>
	</body>
</html>