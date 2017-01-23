<html>

<head>
	<?php include './res/templates/head.php';?>
</head>

<body>

<?php

    include_once './res/websend/Websend.php';

    //Replace with bukkit server IP. To use a different port, change the constructor to: $ws = new Websend("ip", port);
	$ws = new Websend($configs->server_ip, 4446);

    //Replace with password specified in Websend config file & also replace the password in /res/websend/Websend.php
    $ws->connect($configs->websend_password);

    $ws->doCommandAsConsole("say this is just a test guys");
    $ws->disconnect();
	
?>

<?php
	
	$data = file_get_contents('ftp://MyFTPUsername:MyFTPPassword@'. $configs->server_ip .'/logs/latest.log');

?>

<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>

</body>
</html>