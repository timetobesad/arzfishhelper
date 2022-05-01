<?php

	$data = json_decode($_POST['finded']);
	
	$in = '('.implode(",", $data).')';
	
	$sql= 'SELECT title, price FROM fish WHERE title IN '.$in.' ORDER BY price DESC';
	
	$dbh = new PDO('mysql:host=localhost;dbname=helperfish', 'root', '');

	$sth = $dbh->query($sql);
	$rows = $sth->fetchAll();
	
	foreach($rows as $row)
		$result[] = array('title' => $row['title'], 'price' => $row['price']);
	
	echo json_encode($result);

?>