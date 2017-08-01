<html>
	<head>
	 <title>LED Control</title>
	</head>
	<body>
		LED Control:
		<form method="get" action="index.php">
			<input type="submit" value="ON" name="on">
			<input type="submit" value="OFF" name="off">
        </form>
		<?php
        	$declare = system("gpio -g mode 24 out"); // or exec or shell_exec
        	if(isset($_GET['on'])){

                $TurnOn = system("gpio -g write 24 1");
		   	}
		   	else if(isset($_GET['off'])){
                $TurnOff = exec("gpio -g write 24 0");
				echo "LED is off";
		   	}
	   ?>
	   </body>
</html>