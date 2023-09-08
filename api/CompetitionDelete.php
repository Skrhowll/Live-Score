<?php
// Préparation de la requête
$ins = $cnx->prepare("DELETE FROM competition WHERE id = ?");
// Exécution avec les variables
$ins->execute([$_GET['id']]);