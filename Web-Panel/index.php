<html>

<head>
	<?php include './res/templates/head.php';?>
</head>

<body>

<?php

    include_once './res/websend/Websend.php';

    //Replace with bukkit server IP. To use a different port, change the constructor to: $ws = new Websend("ip", port);
	$ws = new Websend($configs->websend_ip, $configs->websend_port);

    //Replace with password specified in Websend config file & also replace the password in /res/websend/Websend.php
    $ws->connect($configs->websend_password);

    $ws->doCommandAsConsole("say this is just a test guys");
    $ws->disconnect();
	
?>

<div id="log">
	<?php
		$data = file_get_contents('ftp://'. $configs->ftp_username .':'. $configs->ftp_password .'@'. $configs->ftp_ip .'/logs/latest.log');
	?>
	
	<?php
		$onlinemode = $_POST['onlineMode'];
		
		echo $onlinemode;
	?>
	
	<pre>
		<?php echo $data;?>
	</pre>
</div>

<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>

</body>
</html>