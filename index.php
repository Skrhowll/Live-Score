<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style/style.css">
        <meta charset="UTF-8">
        <title>Partie front</title>
        <?php	
        // INDEX DE LA PARTIE FRONT DU PROJET
            require_once('MenuFront');
        ?>
    </head>

    <body>
    <?php	
        // On vérifie si action
        if(isset($_REQUEST['action'])) {
            $action = $_REQUEST['action'];
        } else {
            $action = '';
        }
        // On crée le router
        switch($action) {
            default:
            break;
            case 'accueil': // PAGE ACCUEIL
                require_once(ROOT.'api/accueil.php');	
            break;

            case 'competition': // PAGE COMPETITION
                require_once(ROOT.'api/competition.php');	
            break;

            case 'match': // PAGE MATCH
                require_once(ROOT.'api/match.php');	
            break;
            }
    ?>
    </body>
</html>