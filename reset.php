<?php
	if(isset($_POST['reset'])) {
		system("gpio -g write 27 0");
		system("gpio -g write 17 0");
		system("gpio -g write 09 0");
		system("gpio -g write 10 0");
		echo "reset";
	} else {
		return;
	}
?>