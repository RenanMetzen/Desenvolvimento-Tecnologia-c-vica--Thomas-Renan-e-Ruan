console.log([{"key":"chave-api-dados","value":"da3539c7361337f299b88390a36bf855"}]);

document.addEventListener("DOMContentLoaded", function(event) {
    var data = 1;
    var fase = 1;
    var pagina = 1;
    const url = "http://www.portaltransparencia.gov.br/api-de-dados/despesas/documentos?dataEmissao="+data+"&fase="+fase+"&pagina="+pagina;
    fetch(url)
    .then(response => response.json())
    .then(personagem => {
        console.log(personagem);
        document.querySelector(".nome").innerHTML = personagem.name;
        document.querySelector('img').src = personagem.sprites['front_default'];
        if(personagem.types.length == 1){
            document.querySelector(".type").innerHTML = personagem.types[0]['type']['name'];
        }else{
            document.querySelector(".type").innerHTML = personagem.types[0]['type']['name']+", "+personagem.types[1]['type']['name'];
        }
        document.querySelector(".height").innerHTML = (personagem.height/10)+"m(s)";
        document.querySelector(".weight").innerHTML = (personagem.weight/10)+"kg";
    });
});