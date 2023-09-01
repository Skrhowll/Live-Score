<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Live_Score</title>
        <link rel="stylesheet" href="CSS/Page_Central.css">
        <link rel="stylesheet" href="CSS/Header.css">
        <link rel="stylesheet" href="CSS/listeCompet.css" >
        <link rel="stylesheet" href="CSS/scorelive.css">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">
    </head>

    <body>
    <?php	
        define("ROOT", "/opt/lampp/htdocs/");

        // On vérifie si action
        if(isset($_REQUEST['action'])) {
            $action = $_REQUEST['action'];
        } else {
            $action = '';
        }

        // On crée le router
        switch($action) {
            default:
                require_once(ROOT.'Accueil.php');	
            break;
            case 'accueil': // PAGE ACCUEIL
                require_once(ROOT.'Accueil.php');	
            break;

            case 'competition': // PAGE COMPETITION
                require_once(ROOT.'Competition.php');	
            break;

            case 'match': // PAGE MATCH
                require_once(ROOT.'Match.php');	
            break;
            }
    ?>
    </body>
</html>