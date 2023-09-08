<h1>Gérer les Compétitions</h1>
<section id="liste">
<?php
$s = $cnx->query("SELECT * FROM competition ORDER BY id DESC");
while ($r = $s->fetch()) {
	echo '<p>';
	echo '<span>'.$r['id'].'</span>';
    echo '<span>'.$r['logo'].'</span>';
    echo '<span>'.$r['libelle'].'</span>';
	echo '<a href="?action=MatchEdit&id='.$r['id'].'">Modifier cette catégorie</a>';	
	echo '<a href="?action=MatchDelete&id='.$r['id'].'">Supprimer cette catégorie</a>';
	echo '<p>';
}
?>
</section>