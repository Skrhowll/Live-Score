<?php
define('ROOT', '/opt/lampp/htdocs/');
require_once(ROOT.'config/bdd.php');

if (isset($_GET['id'])) 
{
    $matchId = $_GET['id']; 
} 
else 
{
    echo "message => ID du match manquant dans l'URL.";
}

$statement = $cnx->prepare("SELECT score1, score2 FROM matchs WHERE id = ".$matchId.";");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;
?>