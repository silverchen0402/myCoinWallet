<?php

// simple configuration file

error_reporting(E_ALL);
ini_set('display_errors','On');

// bitcoin rpc info
define('USER','admin');
define('PASS','1234');
define('SERVER','192.168.1.102');
define('PORT','8332');

#define('SSL_CERT_PATH','/var/www/coin/includes/server.cert'); # probably best if this is a hardcoded full path

?>
