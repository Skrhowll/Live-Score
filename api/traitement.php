<?php
// Fonction pour générer un token
function generateToken() {
    // Obtenez l'heure actuelle au format Unix timestamp
    $timestamp = time();

    // Caractères disponibles pour le token
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Longueur du token souhaitée
    $token_length = 32; // Vous pouvez ajuster cette longueur selon vos besoins

    // Initialisation du token avec le timestamp
    $token = (string)$timestamp;

    // Ajoutez des caractères aléatoires pour compléter la longueur du token
    $characters_length = strlen($characters);
    for ($i = strlen($token); $i < $token_length; $i++) {
        $random_character = $characters[rand(0, $characters_length - 1)];
        $token .= $random_character;
    }

    return $token;
}

// Générez un token
$token = generateToken();

// Affichez le token
echo $token;

    /*$sql = 'mysql';
    $host = 'localhost';
    $bdd = 'Live_Score';
    $login = 'root';
    $mdp = '';
    
    try {
        $cnx = new PDO("$sql:host=$host;dbname=$bdd", $login, $mdp);
    }
    catch (PDOException $e) {
        echo 'Erreur connexion : '. $e->getMessage();
    }

    try {
          // Préparez et exécutez la requête SQL d'insertion avec l'adresse e-mail et le token
        $ins = $cnx->prepare("INSERT INTO Live_Score.user (mail, cle) VALUES(?, ?)");
        $ins->execute(["jonas.pustay@outlook.fr", $token]);

        // Fermez la connexion à la base de données
        $cnx = null;
    } catch (PDOException $e) {}*/

    // Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Génère un token
    $generated_token = generateToken();

    // Stocke le token dans une variable de session pour l'afficher sur la page principale
    session_start();
    $_SESSION['token'] = $generated_token;
    session_write_close();

    // Redirige vers la page principale pour afficher le token
    header('Location: AdminToken.php');
    exit();
}

?>
