
<?php
//Scirpte d'update de match
$ins = $cnx->prepare("UPDATE Match SET ID_Equipe_1=?, ID_Equipe_2=?, Score_1=?, Score_2=?, Commentaire=?,Date=? ,Status=? WHERE id = ?");
// Exécution avec les variables
$ins->execute([$_POST['ID_Equipe_1'],$_POST['ID_Equipe_2'],$_POST['Score_1'],$_POST['Score_2'],$_POST['Commentaire'],$_POST['Date'], $_POST['Status'],$_POST['id']]);