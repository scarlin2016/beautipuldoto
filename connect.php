<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'BeautipulDoto';

$db = new PDO('mysql:host='.$db_host.';
					dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


<?php
//$db_host = 'gator4187.hostgator.com';
//$db_user = 'carsamw_admin';
//$db_pass = 'DBT9ZMYxpCa+';
//$db_database = 'carsamw_BeautipulDoto';
//
//$db = new PDO('mysql:host='.$db_host.';
//					dbname='.$db_database, $db_user, $db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//?>
