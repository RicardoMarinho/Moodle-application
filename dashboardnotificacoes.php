<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Ricardo Braz e Pedro Gomes" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/js/funcoes.js"></script>
  <link rel="stylesheet" href="assets\css\style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Dados Pessoais</title>
</head>
<style>

.notificacoes {
  font-family: arial, sans-serif;
  font-size: 13px;
  border-collapse: collapse;
  table-layout: auto;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f8f7f7;
}

.assunto {
  width: 50%;
}

</style>

<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <div class="w3-bar-padd">
      <a href="dashboard.html" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-tachometer fa-fw" aria-hidden="true"></i>Painel de utilizador</a>
      <a href="dashboardDadosPessoais.html" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Os meus dados</a>
      <a href="noticias.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-newspaper-o fa-fw"
          aria-hidden="true"></i>Noticias</a>
      <a href="calendario.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-calendar fa-fw"
          aria-hidden="true"></i>Calendário</a>
      <a href="dashboardtimeline.html" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-area-chart fa-fw" aria-hidden="true"></i>Cronograma do curso</a>
      <a href="dashboardnotificacoes.html" class="w3-bar-item w3-button w3-bar-border w3-bar-active"><i class="icon fa fa-bell-o fa-fw"
          aria-hidden="true"></i>Notificações</a>
      <a href="ficheiros.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-folder-o fa-fw"
          aria-hidden="true"></i>Os meus ficheiros</a>
      <a href="index.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fas fa-lock fa-fw"
          aria-hidden="true"></i>Sair</a>
    </div>
  </div>
  <div id="page">
    <header id="page-header" class="row">
      <div class="col-12 pt-3 pb-3"></div>
    </header>
    <div class="fixed-top navbar navbar-expand">
      <div data-region="drawer-toggle" class="d-inline-block mr-3">
        <button id="openNav" onclick="w3_open()" aria-expanded="true" aria-controls="nav-drawer" type="button"
          class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left"
          data-preference="drawer-open-nav">
          <i class="icon fa fa-bars fa-fw " aria-hidden="true"></i><span class="sr-only">Side panel</span></button>
      </div>
      <a href="#" class="navbar-brand d-sm-inline atitle"><span class="site-name d-none d-md-inline">Moodle
          ISTEC</span></a>
      <div class="navbar-nav d-md-flex">
        <a class="dropdown-toggle nav-link link-vis" data-toggle="dropdown" href="#"><b>Português - Portugal
            (pt)</b></a>
        <ul class="dropdown-menu show">
          <li><a href="#" class="dropdown-item"><i class="sl-flag flag-pt"></i><span class="active">Português</span></a>
          </li>
          <li><a href="#" class="dropdown-item"><i class="sl-flag flag-usa"></i><span>English</span></a></li>
        </ul>
      </div>
      <ul class="nav navbar-nav ml-auto align-items-center">
        <div class="d-none d-lg-block">
          <div class="search-input-wrapper nav-link ">
            <form action="#" class="search-input-form">
              <input type="text" placeholder="Pesquisar.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <li class="d-flex align-items-center username"><span><strong>Ricardo Braz</strong></span></li>
        <li class="d-flex align-items-center"><span class="avatar current"><img src="images/perfilricardo.png"
              class="userpicture" width="50" height="50" role="presentation" aria-hidden="true"></span></li>
      </ul>
    </div>
    <div id="region-main-box" class="col-12">
      <section id="region-maindados" class="has-blocks mb-3 ml-dados">
        <section class="block block_myoverview  card mb-3">
          <div class="card-body p-3">
            <h5 class="card-title d-inline">Notificações</h5><br>
            
            <table class="notificacoes">
              <tr>
                <th>Nome</th>
                <th class="assunto">Assunto</th>
                <th>Data</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <tr>
                  <td>Pedro Gomes</td>
                  <td class="assunto">Novo Moodle ISTEC</td>
                  <td>26/04/2019 18:30</td>
                  <td><i class="fas fa-envelope-square"></i></td>
                  <td> <i class="fas fa-binoculars"></i></td>
                  <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Ricardo Baptista</td>
                    <td class="assunto">Enunciado do projeto final</td>
                    <td>16/04/2019 00:52</td>
                    <td><i class="fas fa-envelope-open-text"></i></td>
                    <td> <i class="fas fa-binoculars"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Paulo Monteiro</td>
                    <td class="assunto">Data prevista para MiniTeste</td>
                    <td>26/03/2019 21:20</td>
                    <td><i class="fas fa-envelope-square"></i></td>
                    <td> <i class="fas fa-binoculars"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>


            </table>
          </div>
        </section>
      </section>
    </div>
  </div>
  <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
</body>

</html>