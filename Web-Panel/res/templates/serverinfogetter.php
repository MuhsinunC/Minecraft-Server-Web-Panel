<?php

	foreach ($configs->servernames as $key => $servername) {
		$serverip =  $configs->serverips[$key];
		$serverport =  $configs->serverports[$key];
		
		//Server Info Getter
			$json = file_get_contents('https://mcapi.us/server/status?ip=' . $serverip . '&port=' . $serverport);
			$data = json_decode($json,true);
		
			$status = $data['status']; //Success or failure getting info (Ex. success)
			$online = $data['online']; //Server Online or not (Ex. true)
			$motd = $data['motd']; //Server MOTD (Ex. A Minecraft Server, Some strange formatting may be in
								   //this, there are various libraries available for formatting this.)
			$error = $data['error']; //Error message from the request (Error Messages: If you forget the IP
									 //the error will be missing data. if it is an invalid IP, the error will
									 //be invalid hostname or port. if an error starts with internal server
									 //error, it means something is wrong with my server. empty means no error.)
			$maxplayers = $data['players']['max']; //Maximum player limit (Ex. 20)
			$currentplayers = $data['players']['now']; //Current number of players (Ex. 2)
			$serverversion = $data['server']['name']; //Current server version name (Ex. Spigot 1.11.2)
			$serverprotocol = $data['server']['protocol']; //Server version protocol (Ex. 47)
			$lastonlinestamp = $data['last_online']; //The date the server was last recorded online. If empty, it has
												//never been online. it is a unix timestamp in string form. if
												//this has the same value as last_updated, it means that it is
												//currently online. (Ex. 1431985691)
			$lastupdatedstamp = $data['last_updated']; //The date the status of the server was last updated at. It
												  //updates every five minutes, so you may send requests as
												  //soon as it has expired. (Ex. 1431985691)
												  
		//Convert Unix Timestamps To Readable Datetimes
			$lastonline = date('d-m-Y H:i:s', intval($lastonlinestamp));
			$lastupdated = date('d-m-Y H:i:s', intval($lastupdatedstamp));
	} //foreach
?>