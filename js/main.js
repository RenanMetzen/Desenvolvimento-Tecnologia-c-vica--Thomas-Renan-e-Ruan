function pesquisar() {
  var cidade = 4312401;
    const url = 'http://www.portaltransparencia.gov.br/api-de-dados/bolsa-familia-por-municipio?mesAno=202001&codigoIbge='+cidade+'&pagina=1';

    var xhr = new XMLHttpRequest();

     xhr.open("GET","https://cors-anywhere.herokuapp.com/"+url);
     xhr.setRequestHeader("chave-api-dados", "da3539c7361337f299b88390a36bf855");
    xhr.setRequestHeader("Accept", "*/*");
    xhr.send(null);

    xhr.onreadystatechange = function() {
      if(xhr.readyState === 4){
        var name = JSON.parse(xhr.responseText)[0]['municipio']['nomeIBGE'];
        document.getElementById('cidadeDiv').innerHTML = "Cidade: "+(name.charAt(0).toUpperCase() + (name.slice(1)).toLowerCase());
        document.getElementById('pessoasDiv').innerHTML = "Pessoas beneficiadas pelo Bolsa Família: "+JSON.parse(xhr.responseText)[0]['quantidadeBeneficiados'];
        document.getElementById('valorDiv').innerHTML = "Valor total de gastos: "+JSON.parse(xhr.responseText)[0]['valor']+" Reais";
      }
    }
}