

<?php
//Scirpte d'update de match
$ins = $cnx->prepare("UPDATE competition SET libelle=?, logo=?");
// Exécution avec les variables
$ins->execute([$_POST['libelle'],$_POST['logo']]);