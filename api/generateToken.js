// Fonction pour gérer l'envoi du formulaire
function generateToken() {
    // Récupérer l'adresse e-mail depuis le champ de formulaire
    var email = document.getElementById("email").value.trim(); // Supprimer les espaces inutiles

    // Vérifier si l'adresse e-mail est vide
    if (email === "") {
        alert("Veuillez saisir une adresse e-mail.");
        return; // Ne génère pas de token si l'adresse e-mail est vide
    }

    // Effectuer une requête AJAX pour appeler le script PHP qui génère le token
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Afficher le token généré dans l'élément HTML approprié
            document.getElementById("tokenDisplay").textContent = xhr.responseText;
        }
    };

    // Envoyer une requête POST au script PHP avec l'adresse e-mail
    xhr.open("POST", "traitement.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("email=" + email);
}

// Attacher la fonction de génération de token au formulaire
document.getElementById("tokenForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Empêcher le comportement de soumission par défaut
    generateToken(); // Appeler la fonction de génération de token
});

