const competitionList = document.querySelector(".container");

fetch('http://localhost/api/GetAll_Competition.php', {
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
    let competitions = JSON.parse(response);
    console.log(competitions);

    competitions.forEach(function(competition) {

    var divItem = document.createElement("div");
    divItem.classList.add('item');

    
    var divImage = document.createElement("div");
    divImage.classList.add('item__image')

    var image = document.createElement("img");
    image.src = competition.logo;

    divImage.appendChild(image);
    divItem.appendChild(divImage);

    var divBody = document.createElement("div");
    divBody.classList.add('item__body')


    var title = document.createElement("div");
    title.classList.add('item__title')
    title.innerHTML = competition.libelle;
    
    divBody.appendChild(title);
    divItem.appendChild(divBody);
    
    competitionList.appendChild(divItem);

    //   var description = document.createElement("div");
    //   description.classList.add('item__description');
    //   description.innerHTML = competition.description;
})
});