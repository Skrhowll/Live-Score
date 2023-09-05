<h1>Gérer les compétitions</h1>
<section id="liste">
<?php
$s = $cnx->query("SELECT * FROM competition ORDER BY id DESC");
while ($r = $s->fetch()) {
	echo '<p>';
	echo '<span>'.$r['id'].'</span>';
    echo '<span>'.$r['libelle'].'</span>';
    echo '<span>'.$r['logo'].'</span>';
	echo '<a href="?action=catEdit&id='.$r['id'].'">Modifier cette Compétition</a>';	
	echo '<a href="?action=catDelete&id='.$r['id'].'">Supprimer cette Compétition</a>';
	echo '<p>';
}
?>
</section>

