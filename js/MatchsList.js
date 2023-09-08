document.addEventListener("DOMContentLoaded", function() 
{
  const MatchFinish = document.getElementById("Finish");
  const MatchInProgress = document.getElementById("InProgress");
  const MatchInFuture = document.getElementById("InFuture");

fetch('http://localhost/api/GetAll_Match.php', {
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
            let Matchs = JSON.parse(response);
            console.log(Matchs);

            for (let index = 0; index < Matchs.length; index++) 
            {
              if (Matchs[index]["statut"] == "Terminé") 
              {
                MatchFinish.innerHTML += "<a href='http://localhost/?action=match&id=" + (index + 1) + "'><div class='Match_Case'></div></a>"
              }

              if (Matchs[index]["statut"] == "En cours") 
              {
                MatchInProgress.innerHTML += "<a href='http://localhost/?action=match&id=" + (index + 1) + "'><div class='Match_Case' ></div></a>";
              }

              if (Matchs[index]["statut"] == "Avenir") 
              {
                MatchInFuture.innerHTML += "<a href='http://localhost/?action=match&id=" + (index + 1) + "'><div class='Match_Case'></div></a>";
              }
            }
        })
});
