<?php
//Scirpte d'update de competition
$ins = $cnx->prepare("UPDATE competition SET libelle=?, logo=? WHERE id = ?");
// Exécution avec les variables
$logo = "images/"+$_POST['logo'];
$ins->execute([$_POST['name'],$logo]);