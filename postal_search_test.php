<?php
require_once('model/Base.php');
require_once('model/Address.php');

$db = new Address();
$address = $db ->getAddress(5450001);
var_dump($address);
exit;
?>