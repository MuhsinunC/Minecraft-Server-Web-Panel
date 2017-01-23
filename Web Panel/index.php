<?php
    include_once './res/websend/Websend.php';

    //Replace with bukkit server IP. To use a different port, change the constructor to new Websend(ip, port)
    $ws = new Websend("123.456.789.123"); 

    //Replace with password specified in Websend config file
    $ws->connect("password");

    $ws->doCommandAsConsole("time set 6000");
    $ws->disconnect();
?>