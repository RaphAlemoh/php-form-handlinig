<?php
require_once("constant.php");

$dbc = mysqli_connect($server, $db_name, $db_password, $db_table);
if (!$dbc) {
	die("Connection failed: " . mysqli_connect_error());
  }

mysqli_set_charset($dbc, 'utf-8'); 
?>