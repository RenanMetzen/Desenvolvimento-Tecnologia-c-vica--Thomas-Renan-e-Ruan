<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>API Despesas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="display: flex; flex-direction: row; justify-content: space-between;">
  <div style="width: 30%; text-align:center;">
    <h4 class="navbar-brand" href="#">Bolsa Família - Vale do Caí</h4>
  </div>
  <div style="width: 40%; display: flex; flex-direction: row; justify-content: space-around;">
    <select  class="form-control" id="cidade" style="width: 180px;">
      <option value="" disabled hidden selected>Cidade</option>
      <option value=4300570>Alto Feliz</option>
      <option value=4301651>Barão</option>
      <option value=4302352>Bom Princípio</option>
      <option value=4302659>Brochier</option>
      <option value=4304689>Capela de Santana</option>
      <option value=4308102>Feliz</option>
      <option value=4309555>Harmonia</option>
      <option value=4311643>Linha Nova</option>
      <option value=4311791>Maratá</option>
      <option value=4312401>Montenegro</option>
      <option value=4314035>Pareci Novo</option>
      <option value=4316501>Salvador do Sul</option>
      <option value=4318614>São José do Sul</option>
      <option value=4319356>São Pedro da Serra</option>
      <option value=4319505>São Sebastião do Caí</option>
      <option value=4319752>São Vendelino</option>
      <option value=4322251>Tupandi</option>
      <option value=4322541>Vale Real</option>
    </select>
    <select class="form-control" id="mes" style="width: 180px;"></select> 
    <button type="button" onclick="return pesquisar()" class="btn btn-secondary" style="width: 90px;">Consultar</button>
  </div>
</nav><br>
<div class="form-row col-md-12">
  <div class="form-group col-md-1"></div>
  <div style="background-color:#d3d3d3; border-radius:9px; height:400px; display:flex; flex-direction:column; justify-content:space-evenly;" class="form-group col-md-6">
    <div style="padding-left:20; display: flex; flex-direction: row; width:90%; justify-content: space-between;"><h5 style="font-weight: bold;">Cidade: </h5><h5 id="cidadeDiv"></h5></div>
    <div style="padding-left:20; display: flex; flex-direction: row; width:90%; justify-content: space-between;"><h5 style="font-weight: bold;">Mês/Ano: </h5><h5 id="mesDiv"> </h5></div>
    <div style="padding-left:20; display: flex; flex-direction: row; width:90%; justify-content: space-between;"><h4 style="font-weight: bold;">Pessoas beneficiadas: </h4><h4 id="pessoasDiv"></h4></div>
    <div style="padding-left:20; display: flex; flex-direction: row; width:90%; justify-content: space-between;"><h4 style="font-weight: bold;">Valor total de gastos: </h4><h4 id="valorDiv"></h4></div>
  </div>
  <div class="form-group col-md-1"></div>
  <div class="form-group col-md-3" style="display: flex; flex-direction: column; justify-content: space-between;">
    <div style="background-color: LightGreen; border-radius:9px; height:200px; display:flex; flex-direction:column; justify-content: space-evenly">
      <div style="padding-left: 20; padding-top:10;"><a href="https://www.gov.br/cidadania/pt-br/acoes-e-programas/bolsa-familia" target="_blank"><h5>O que é o Bolsa-Família?</h5></a></div>
    </div>
    <div style="background-color:LightSkyBlue; border-radius:9px; height:150px">
      <div style="padding-left: 20; padding-top:20;" id="site"><h5>Site IBGE do município:</h5></div>
    </div>
  </div>
</div>
<script src='js/main.js'></script>
</html>
