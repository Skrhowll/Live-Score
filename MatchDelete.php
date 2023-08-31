<?php
// Préparation de la requête
$ins = $cnx->prepare("DELETE FROM Match WHERE id = ?");
// Exécution avec les variables
$ins->execute([$_GET['id']]);