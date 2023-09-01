<?php // connexion avec la bdd
define('ROOT', '/opt/lampp/htdocs/');
require_once(ROOT.'config/bdd.php');
?>
<!doctype html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Backoffice</title>
        <link rel="stylesheet" href="<?= ROOT; ?>style/style.css">
        <link rel="stylesheet" href="../CSS/api.css">
        </head>

    <body>
        <?php
            // Intégration du menu
            require_once(ROOT.'api/MenuBack.php');	

            // On vérifie si une action existe pour le rooter
            if(isset($_REQUEST['action'])) {
                $action = $_REQUEST['action'];
            } else {
                $action = '';
            }

            // On crée le router
            switch($action) {
                default:
                break;

                // Gestion des matchs
                case 'MatchCreate':
                    require_once(ROOT.'api/MatchCreate.php');	
                break;
                case 'MatchSave':
                    require_once(ROOT.'api/MatchSave.php');	
                    require_once(ROOT.'api/MatchList.php');	
                break;
                case 'MatchUpdate':
                    require_once(ROOT.'api/MatchUpdate.php');	
                    require_once(ROOT.'api/MatchList.php');	
                break;
                case 'MatchList':
                    require_once(ROOT.'api/MatchList.php');	
                break;
                case 'MatchEdit':
                    require_once(ROOT.'api/MatchEdit.php');	
                break;
                case 'MatchDelete':
                    require_once(ROOT.'api/MatchDelete.php');	
                    require_once(ROOT.'api/MatchList.php');	
                break;

                // Gestion des competitions
                case 'competitionCreate':
                    require_once(ROOT.'api/CompetitionCreate.php');	
                    break;
                case 'competitionSave':
                    require_once(ROOT.'api/CompetitionSave.php');	
                    require_once(ROOT.'api/CompetitionList.php');	
                    break;
                case 'competitionUpdate':
                    require_once(ROOT.'api/CompetitionUpdate.php');	
                    require_once(ROOT.'api/CompetitionList.php');	
                    break;
                case 'competitionList':
                    require_once(ROOT.'api/CompetitionList.php');	
                    break;
                case 'competitionEdit':
                    require_once(ROOT.'api/CompetitionEdit.php');	
                    break;
                case 'competitionDelete':
                    require_once(ROOT.'api/CompetitionDelete.php');	
                    require_once(ROOT.'api/CompetitionList.php');	
                    break;
            }
        $cnx = null;
        ?>
    </body>
</html>