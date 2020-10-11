var aux = new Date();
var meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
for (let i = 0; i < aux.getMonth(); i++) {
  let zero="";
  if(i+1<10){
   zero="0"; 
  }
  document.getElementById('mes').innerHTML += "<option value="+zero+(i+1)+">"+meses[i]+"/"+aux.getFullYear()+"</option>";
}
function pesquisar() {
    var cidade = document.getElementById('cidade').value;
    var mes = document.getElementById('mes').value;
    const url = 'http://www.portaltransparencia.gov.br/api-de-dados/bolsa-familia-por-municipio?mesAno='+aux.getFullYear()+mes+'&codigoIbge='+cidade+'&pagina=1';
    var xhr = new XMLHttpRequest();
    xhr.open("GET","https://cors-anywhere.herokuapp.com/"+url);
    xhr.setRequestHeader("chave-api-dados", "da3539c7361337f299b88390a36bf855");
    xhr.setRequestHeader("Accept", "*/*");
    xhr.send(null);

    xhr.onreadystatechange = function() {
      if(xhr.readyState === 4){
        var name = JSON.parse(xhr.responseText)[0]['municipio']['nomeIBGE'];
        document.getElementById('cidadeDiv').innerHTML = "Cidade: "+(name.charAt(0).toUpperCase() + (name.slice(1)).toLowerCase());
        document.getElementById('pessoasDiv').innerHTML = "Pessoas beneficiadas: "+JSON.parse(xhr.responseText)[0]['quantidadeBeneficiados'];
        document.getElementById('valorDiv').innerHTML = "Valor total de gastos: "+JSON.parse(xhr.responseText)[0]['valor']+" Reais";
        document.getElementById('mesDiv').innerHTML = "Mês/Ano: "+meses[mes-1]+"/"+aux.getFullYear();
      }
    }
}