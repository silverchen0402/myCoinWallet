<?php
require_once('includes/easybitcoin.php');
$bitcoin = new Bitcoin('admin','1234','192.168.1.102','8332');
echo $bitcoin->getbalance('*',0);
?>