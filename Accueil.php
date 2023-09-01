
        <header>
            <nav id="menuFront">
                <a href="?action=accueil"><h1>Accueil</h1></a>
                <a href="?action=match"><h1>Match</h1></a>
                <a href="?action=competition"><h1>Compétition</h1></a>
            </nav>
       </header>
       
       <main>
          <div>
              <h1>Match terminé</h1>
              <hr class="Line-Break">
              <div class="Gallery" id="Finish">
                <div class="Match_Case"></div>
              </div>
          </div>
          <div>
              <h1>Match en cours</h1>
              <hr>
              <div class="Gallery" id="InProgress">

              </div>
          </div>
          <div>
              <h1>Match à avenir</h1>
              <hr>
              <div class="Gallery" id="InFuture">

              </div>
          </div>
       </main>
	<script>

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
                MatchFinish.innerHTML += "<div class='Match_Case'></div>"
              }

              if (Matchs[index]["statut"] == "En cours") 
              {
                MatchInProgress.innerHTML += "<div class='Match_Case'></div>";
              }

              if (Matchs[index]["statut"] == "Avenir") 
              {
                MatchInFuture.innerHTML += "<div class='Match_Case'></div>";
              }
            }
        })
});

  </script>
