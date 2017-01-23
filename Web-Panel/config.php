<?php

//Config File: Edit to your liking! :D
return (object) array(
	
    'title' => 'InfiniD Ware',
    'title_link' => './',
	
	'navbarlinks' => array(
        "Home",
        "Link"
    ),
	
	'navbarlinkdestinations' => array(
        "./",
        "#"
    ),
	
	'websend_ip' => '74.199.12.219',
	'websend_port' => '4446',
	'websend_password' => 'testpassword', //You still have to manually enter ur password
										  //in /res/websend/Websend.php on line 10; this
										  //is only for the other normal pages like index.php
	'ftp_username' => 'MyFTPUsername',
	'ftp_password' => 'MyFTPPassword',
	'ftp_ip' => '74.199.12.219',
);

?>