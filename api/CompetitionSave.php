<?php
$s = $cnx->prepare("SELECT * FROM competition WHERE libelle=?");
$s->execute([$_POST['name']]);
if ($s->rowCount() == 0) {
	$ins = $cnx->prepare("INSERT INTO competition SET libelle=?, logo=?");
    $logo = "images/"+$_POST['logo'];
	$ins->execute([$_POST['name'],$logo]);	
} else {
	echo '<h2>La Compétition éxiste déja</h2>';
}