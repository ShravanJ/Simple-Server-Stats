<HTML>
	<HEAD>
		<TITLE>
			Server Status
		</TITLE>
		<meta http-equiv="refresh" content="1" />
	</HEAD>
	<BODY>
	<?php
		echo "<B>Server Status</B>";
		echo "<BR></BR>";
		echo "Server IP: ".$_SERVER['SERVER_ADDR'];
		echo "<BR></BR>";
		echo "Uptime: ".shell_exec("uptime");
		echo "<BR></BR>";
		echo shell_exec("cd /home/shravan/ && ./temp.sh");
	?>
	</BODY>
</HTML>
