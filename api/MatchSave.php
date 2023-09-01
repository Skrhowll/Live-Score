
<?php
$s = $cnx->prepare("SELECT * FROM matchs WHERE id_equipe1=? AND id_equipe2=? AND score1=? AND score2=? AND id_competition=? AND statut=?");
$s->execute([$_POST['ID_Equipe_1'],$_POST['ID_Equipe_2'],$_POST['Score_1'],$_POST['Score_2'],$_POST['ID_Competition'], $_POST['Status']]);
if ($s->rowCount() == 0) {
	$ins = $cnx->prepare("INSERT INTO matchs SET id_equipe1=?, id_equipe2=?, score1=?, score2=?, id_competition=?, statut=?");
	$ins->execute([$_POST['ID_Equipe_1'],$_POST['ID_Equipe_2'],$_POST['Score_1'],$_POST['Score_2'],$_POST['ID_Competition'], $_POST['Status']]);	
} else {
	echo '<h2>Le match existe déjà</h2>';
}