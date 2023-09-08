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

    $statement = $cnx->prepare("SELECT t.libelle,t.logo FROM Live_Score.matchs m inner join Live_Score.team t on m.id_equipe1 = t.id OR m.id_equipe2 = t.id WHERE m.id = ".$matchId.";");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);

    echo $json;
?>