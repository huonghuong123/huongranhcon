<DOCTYPE!>
<html>
	<head>
		<title>exercise 3</title>
	</head>
	<body>
		<?php
			function daysInMonth($x){
			    $mang = array("31", "28", "31","30", "31", "30", "31", "31", "30", "31","30", "31");
			    echo $mang[$x-1];
			}
			daysInMonth(1);
		?>
	</body>
</html>