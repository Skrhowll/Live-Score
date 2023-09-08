<h1>Créer une Compétition</h1>

<form action="index.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="action" value="competitionSave">
	
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