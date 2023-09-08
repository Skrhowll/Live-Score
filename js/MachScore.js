const scoreEquipe1 = document.getElementById("equipe1");
const scoreEquipe2 = document.getElementById("equipe2");

// Fonction pour rÃ©cuperer et actualiser les scores
function fetchLiveScores() {

        fetch('http://localhost/api/GetScore_Match.php/?id=' + query, {
        method: 'get',
        // may be some code of fetching comes here
    }).then(function(response) 
    {
            if (response.status >= 200 && response.status < 300) 
            {
                return response.text()
            }
            throw new Error(response.statusText)
        })
        .then(function(response) 
        {
            let Score = JSON.parse(response);
            console.log(Score);
                
            scoreEquipe1.innerHTML = Score[0]["score1"];
            scoreEquipe2.innerHTML = Score[0]["score2"];

        })
}


setInterval(fetchLiveScores, 10000);

fetchLiveScores();