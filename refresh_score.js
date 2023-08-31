const scoreEquipe1 = document.getElementById("equipe1");
const scoreEquipe2 = document.getElementById("equipe2");


// Fonction pour récuperer et actualiser les scores
async function fetchLiveScores() {
 
  try {
    const res = await fetch("matches.json"); // API Qui renvoie le JSON des scores
    
    const data = await res.json();
    
    for (const match of data) {
      scoreEquipe1.innerHTML = `${match.score1}`;
      scoreEquipe2.innerHTML = `${match.score2}`;
    }
  } catch (error) {
    console.error("Erreur en rappatriant les scores en direct", error);
  }
}


setInterval(fetchLiveScores, 10000); 


fetchLiveScores();
