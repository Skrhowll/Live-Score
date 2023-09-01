<?php
$sql = 'mysql';
$host = 'localhost';
$bdd = 'Live_Score';
$login = 'root';
$mdp = '';

try {
	$cnx = new PDO("$sql:host=$host;dbname=$bdd", $login, $mdp);
}
catch (PDOException $e) {
	echo 'Erreur connexion : '. $e->getMessage();
}