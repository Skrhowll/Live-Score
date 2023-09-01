
<?php
//Scirpte d'update de match
$ins = $cnx->prepare("UPDATE matchs SET id_equipe1=?, id_equipe2=?, score1=?, score2=?, id_competition=?, statut=? WHERE id = ?");
// Exécution avec les variables
$ins->execute([$_POST['ID_Equipe_1'],$_POST['ID_Equipe_2'],$_POST['Score_1'],$_POST['Score_2'],$_POST['ID_Competition'], $_POST['Status'],$_POST['id']]);