<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='phpchatapp';


$dsn = "mysql:host=$HOSTNAME;dbname=$DATABASE;charset=UTF8";

try {
	$pdo = new PDO($dsn, $USERNAME, $PASSWORD);

	if ($pdo) {
		// echo "Connected to the $DATABASE database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>