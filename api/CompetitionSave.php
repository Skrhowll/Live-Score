
<?php
$s = $cnx->prepare("SELECT * FROM competition WHERE id=?");
$s->execute([$_POST['libelle'],$_POST['logo']]);
if ($s->rowCount() == 0) {
	$ins = $cnx->prepare("INSERT INTO matchs SET libelle=?, logo=?");
	$ins->execute([$_POST['libelle'],$_POST['logo']]);	
} else {
	echo '<h2>La compétition existe déjà</h2>';
}

