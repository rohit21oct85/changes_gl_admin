<?php
require_once('includes/DBInterface.php');
$db = new Database();
$db->connect();
date_default_timezone_set('Asia/Kolkata');

$res = $db->select_state();

echo $res; 
?>
