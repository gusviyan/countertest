<?php

	include "koneksi.php";
	$act=$_GET[act];
	$id = $_GET[id];
	if ($act == "clear"){
		mysql_query ("UPDATE tbl_umum SET status= 1, panggil = 0, loket = 0 WHERE id = $id ");
	
	header('location:counterumumloket2.php?act=default');
	} else if ($act == "hold"){
		mysql_query ("UPDATE tbl_umum SET status= 2, panggil = 0, loket = 0 WHERE id = $id ");
	
	header('location:counterumumloket2.php?act=default');
	}

?>