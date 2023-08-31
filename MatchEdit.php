<?php
//Edit des matchs
$s = $cnx->prepare("SELECT * FROM Match WHERE id = ?");
$s->execute([$_GET['id']]);	
$r = $s->fetch();
?>
<h1>Modifier le Match</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="catUpdate">
	<input type="hidden" name="id" value="<?= $r['id'];?>">

	<label for="title">Equipe Domicile</label>
	<input type="text" name="ID_Equipe_1" id="ID_Equipe_1">

	<label for="title">Equipe Exterieur</label>
	<input type="text" name="ID_Equipe_2" id="ID_Equipe_2">
	
	<label for="title">But Domicile</label>
	<input type="text" name="Score_1" id="Score_1">

	<label for="title">But Exterieur</label>
	<input type="text" name="Score_2" id="Score_2">

	<label for="title">Commentaire</label>
	<input type="text" name="Commentaire" id="Commentaire">

	<label for="title">Date</label>
	<input type="text" name="Date" id="Date">
	
	<label for="title">Status</label>
	<input type="text" name="Status" id="Status">


	<button>Enregistrer</button>
</form>
