<?php

$db = new PDO('mysql:host=localhost; dbname=jump_start_PHP_blog', 'root', 'root');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'CREATE TABLE users (
	
		id integer not null  auto_increment primary key,
		name varchar(40),
		password varchar(100),
		email varchar(150)
	
	)';


try {

	$db->query( $sql );

} catch ( PDOException $e ) {
	echo $e->getMessage();
}



$sql = 'INSERT INTO users (name, password, email)
		VALUES ("admin", MD5("admin"), "admin@mail.to")';

try {

	$db->query( $sql );

	if($db) {
		// ID last insert item
		$id = $db->lastInsertId();
	}

} catch ( PDOException $e ) {
	echo $e->getMessage();
}



$sql = 'INSERT INTO users (name, password, email)
		VALUES ("himak", MD5("himak"), "himak@mail.to")';

try {

	$db->query( $sql );

	if($db) {
		// ID last insert item
		$id = $db->lastInsertId();
	}

} catch ( PDOException $e ) {
	echo $e->getMessage();
}



try {

	$sql = 'SELECT * FROM users';

	$sql = $db->prepare( $sql );

	$sql->execute();

	while ( $row = $sql->fetch() ) {

		echo $row['id'] . ' - ' . $row['name'] .  ' - ' . $row['email'] .  ' - ' . $row['password'];

		echo '<br>';
	}

	$sql->closeCursor();

} catch ( PDOException $e ) {
	echo $e->getMessage();
}