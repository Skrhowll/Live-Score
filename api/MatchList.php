<h1>Gérer les Matchs</h1>
<section id="liste">
<?php
$s = $cnx->query("SELECT * FROM matchs ORDER BY id DESC");
while ($r = $s->fetch()) {
	echo '<p>';
	echo '<span>'.$r['id'].'</span>';
    echo '<span>'.$r['ID_Equipe_1'].'</span>';
    echo '<span>'.$r['Score_1'].'</span>';
    echo '<span>'.$r['Score_2'].'</span>';
    echo '<span>'.$r['ID_Equipe_2'].'</span>';
	echo '<a href="?action=MatchEdit&id='.$r['id'].'">Modifier cette catégorie</a>';	
	echo '<a href="?action=MatchDelete&id='.$r['id'].'">Supprimer cette catégorie</a>';
	echo '<p>';
}
?>
</section>
