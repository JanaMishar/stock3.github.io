<?php

	include '../../stock/php/pdoconnection.php';

	$id=$_POST['id'];
	$query="delete from stocktbl where id='".$id."'";
	$processquery=$conn->prepare($query);
	$processquery->execute();


?>