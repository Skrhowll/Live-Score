const matchList = document.getElementById("matchList");

// Fonction pour récuperer et actualiser les scores
async function fetchLiveScores() {
  try {
    const res = await fetch("matches.json"); // API Qui renvoie le JSON des scores
    const data = await res.json();

    matchList.innerHTML = "";

    for (const match of data) {
      const matchDiv = document.createElement("div");
      matchDiv.className = "match";
      matchDiv.innerHTML = `
      <h2>${match.equipe1} vs ${match.equipe2}</h2>
      <p>Score: ${match.score1} - ${match.score2}</p>
      `;
      matchList.appendChild(matchDiv);
    }
  } catch (error) {
    console.error("Erreur en rappatriant les scores en direct", error);
  }
}


setInterval(fetchLiveScores, 10000); 


fetchLiveScores();
