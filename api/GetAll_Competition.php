<?php
    define('ROOT', '/opt/lampp/htdocs/');
    require_once(ROOT.'config/bdd.php');

    $statement = $cnx->prepare("SELECT * FROM Live_Score.competition;");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);

    echo $json;
?>