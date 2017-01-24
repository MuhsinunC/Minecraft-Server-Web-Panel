<html>

<head>
	<?php include './res/templates/head.php';?>
</head>

<body>

<?php include './res/templates/serverinfogetter.php';?>

<?php //USE THIS INSTEAD OF MCAPI!!!
	$fp = @fsockopen($serverip, $serverport, $errno, $errstr, 3);
	
	if (!$fp) {
		echo 'Down<br>';
	}
	else {
		echo 'Up<br>';
		fclose($fp);
	}
?>

<?php

	$websendstatus = @fsockopen($configs->websend_ip, $configs->websend_port, $errno, $errstr, 3);
	
	if (!$websendstatus) {
		echo 'Websend is offline';
	}
	else {
		include_once './res/websend/Websend.php';
	
		//Replace with bukkit server IP. To use a different port, change the constructor to: $ws = new Websend("ip", port);
		$ws = new Websend($configs->websend_ip, $configs->websend_port);
	
		//Replace with password specified in Websend config file & also replace the password in /res/websend/Websend.php
		$ws->connect($configs->websend_password);
	
		$ws->doCommandAsConsole("say this is just a test guys");
		$ws->disconnect();
	}
?>

<?php
	echo '
		<div id="log">';
		
			$ftpdata = file_get_contents('ftp://'. $configs->ftp_username .':'. $configs->ftp_password .'@'. $configs->ftp_ip . $configs->ftp_latestloglocation);
			
			echo '<div>
					<pre>';
						echo $ftpdata;
						echo '
					</pre>
				</div>
		</div>';
?>

<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>

</body>
</html>