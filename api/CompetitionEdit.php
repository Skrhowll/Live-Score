<?php
//Edit des matchs
$s = $cnx->prepare("SELECT * FROM competition WHERE id = ?");
$s->execute([$_GET['id']]);	
$r = $s->fetch();
?>
<h1>Modifier la Compétition</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="competitionUpdate">
	<input type="hidden" name="id" value="<?= $r['id'];?>">

	<table>
    <tr>
			<th><label for="name">Nom de la compétition</label></th>
			<th><input type="text" name="name" id="name"></th>
		 </tr>

		 <tr>
			<th><label for="name">logo de la compétition</label></th>
			<th><input type="file" name="logo" id="logo"></th>
		 </tr>
	</table>
<br>

	<button>Enregistrer</button>
</form>