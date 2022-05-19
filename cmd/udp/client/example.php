<?php

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP); //Create the socket
$connected = socket_connect($socket, "127.0.0.1", 3000);//Try and connect

$in = "bla";
socket_write($socket, $in, strlen($in));