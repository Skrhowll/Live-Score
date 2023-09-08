const InfoEquipe1 = document.getElementById("Team1");
const InfoEquipe2 = document.getElementById("Team2");

const Img_Equipe1 = document.getElementById("logo_Team1");
const Img_Equipe2 = document.getElementById("logo_Team2");

const query = window.location.search.substring(17);
console.log(query);

// Fonction pour rÃ©cuperer et actualiser les scores
function fetchLiveInfo() {

        fetch('http://localhost/api/GetInfo_Match.php/?id=' + query, {
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
            let Info = JSON.parse(response);
            console.log(Info);
                
            InfoEquipe1.innerHTML = Info[0]["libelle"];
            InfoEquipe2.innerHTML = Info[1]["libelle"];

            Img_Equipe1.src = Info[0]["logo"];
            Img_Equipe2.src = Info[1]["logo"]
        })
}

fetchLiveInfo();