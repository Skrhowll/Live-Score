<?php
//Edit des matchs
$s = $cnx->prepare("SELECT * FROM matchs WHERE id = ?");
$s->execute([$_GET['id']]);	
$r = $s->fetch();
?>
<h1>Modifier le Match</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="MatchUpdate">
	<input type="hidden" name="id" value="<?= $r['id'];?>">

	<table>
		 <tr>
			<th><label for="title">Equipe Domicile</label></th>
			<th><input type="number" name="ID_Equipe_1" id="ID_Equipe_1"></th>
		 </tr>

		 <tr>
			<th><label for="title">Equipe Exterieur</label></th>
			<th><input type="number" name="ID_Equipe_2" id="ID_Equipe_2"></th>
		 </tr>

		 <tr>
			<th><label for="title">But Domicile</label></th>
			<th><input type="number" name="Score_1" id="Score_1"></th>
		 </tr>

		 <tr>
			<th><label for="title">But Exterieur</label></th>
			<th><input type="number" name="Score_2" id="Score_2"></th>
		 </tr>

		 <tr>
			<th><label for="title">ID_Competition</label></th>
			<th><input type="number" name="ID_Competition" id="ID_Competition"></th>
		 </tr>

		 <tr>
			<th><label for="title">Status</label></th>
			<th><input type="text" name="Status" id="Status"></th>
		 </tr>
	</table>
<br>

	<button>Enregistrer</button>
</form>