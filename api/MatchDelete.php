<?php
// Préparation de la requête
$ins = $cnx->prepare("DELETE FROM matchs WHERE id = ?");
// Exécution avec les variables
$ins->execute([$_GET['id']]);