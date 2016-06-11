<?php

define('USERNAME', 'root' );
define('PASSWORD', '');
define('DATABASE', 'pickurflick');
define('HOST','localhost');

if(!isset($con)){
$con = @mysql_connect(HOST,USERNAME,PASSWORD) or die('unable to connect');
$db = @mysql_select_db(DATABASE,$con) or die('cannot select db');
}

?>
