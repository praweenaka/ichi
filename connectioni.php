<?php
$GLOBALS['hostname'] = 'localhost';
$GLOBALS['username'] = 'root';
$GLOBALS['password'] = '';
$GLOBALS['db'] = 'ichiro';
 
$GLOBALS['dbinv'] = mysqli_connect($GLOBALS['hostname'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['db']);
 
?>
