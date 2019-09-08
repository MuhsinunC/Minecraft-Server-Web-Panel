<?php

//Config File: Edit to your liking!
return (object) array(
	
    'title' => 'Minecraft Server',
    'title_link' => './',
	
	'navbarlinks' => array(
        "Home",
        "Link"
    ),
	
	'navbarlinkdestinations' => array(
        "./",
        "#"
    ),
	
	'websend_ip' => '127.0.0.1',
	'websend_port' => '4446',
	'websend_password' => 'testpassword', //You still have to manually enter ur password
										  //in /res/websend/Websend.php on line 10; this
										  //is only for the other normal pages like index.php
	'ftp_username' => 'MyFTPUsername',
	'ftp_password' => 'MyFTPPassword',
	'ftp_ip' => '127.0.0.1',
	'ftp_latestloglocation' => '/logs/latest.log',
	
	'servernames' => array(
        "Mine",
    ),
	
	'serverips' => array(
        "127.0.0.1",
    ),
	
	'serverports' => array(
        "25566",
    ),
);

?>