<?php
//Edit des compétition
$s = $cnx->prepare("SELECT * FROM competition WHERE id = ?");
$s->execute([$_GET['id']]);	
$r = $s->fetch();
?>
<h1>Modifier la compétition</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="CompetitionUpdate">
	<input type="hidden" name="id" value="<?= $r['id'];?>">

	<label for="title">Nom</label>
	<input type="text" name="libelle" id="libelle">

	<label for="title">Logo</label>
	<input type="text" name="libelle" id="libelle">
	<button>Enregistrer</button>
</form>
