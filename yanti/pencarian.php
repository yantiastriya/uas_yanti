<?php
$q="";
if (isset($_GET['submit']) && !empty($_GET['q'])) {$q= $_GET['q'];
	$sql_where= "where nama like '{$q}%'";
	}
	$title = 'Biodata';
	include_once 'koneksi.php';
	$sql = 'select*from Biodata';
	if (isset ($sql_where))
		$sql .=$sql_where;
	$result = mysql_query($conn, $sql) ;


	include_once 'index2.php';
	?>