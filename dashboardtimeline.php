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
@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700');

.timeline {
  font-family: 'Open Sans Condensed', sans-serif;
  position:  relative;
  box-sizing: border-box;
}
.timeline:before{
  content:'';
  position: absolute;
  left: 50%;
  width: 2px;
  height: 100%;
  background: #c5c5c5;
}
.timeline ul {
  margin: 0;
  padding: 0;
}

.timeline ul li{
  list-style: none;
  position: relative;
  width: 50%;
  padding: 20px 40px;
  box-sizing: border-box;
}
.timeline ul li:nth-child(odd){
  float:left;
  text-align: right;
  clear:both;
}
.timeline ul li:nth-child(even){
  float:right;
  text-align: left;
  clear:both;
}
.contenttime{
  padding-bottom: 20px;
}
.timeline ul li:nth-child(odd):before{
  content: '';
  position: absolute;
  top: 24px;
  right: -6px;
  width: 10px;
  height: 10px;
  background: rgba(233,33,99,1);
  border-radius: 50%;
  box-shadow: 0 0 0 3px rgba(233,33,99,0.2);
}
.timeline ul li:nth-child(even):before{
  content: '';
  position: absolute;
  top: 24px;
  left: -4px;
  width: 10px;
  height: 10px;
  background: rgba(233,33,99,1);
  border-radius: 50%;
  box-shadow: 0 0 0 3px rgba(233,33,99,0.2);
}
.timeline ul li h3{
  margin: 0;
  padding: 0;
  font-weight: 600;
  color: black;

}
.timeline ul li p{
  margin: 10px 0 0 ;
  padding: 0;
}
.timeline ul li .time h4{
  margin: 0;
  padding: 0;
}

h4{
  color: #fff;

}
.timeline ul li:nth-child(odd) .time{
  position: absolute;
  top: 12px;
  right: -165px;
  margin: 0;
  padding: 8px 16px;
  background: #1177d1;
  color: #fff;
  border-radius: 18px;
  box-shadow: 0 0 0 3px rgba(3, 1, 19, 0.3);
}

.timeline ul li:nth-child(even) .time{
  position: absolute;
  top: 12px;
  left: -165px;
  margin: 0;
  padding: 8px 16px;
  background:#1177d1;
  color: #fff;
  border-radius: 19px;
  box-shadow: 0 0 0 3px rgba(3, 1, 19, 0.3);
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
      <a href="dashboardtimeline.html" class="w3-bar-item w3-button w3-bar-border  w3-bar-active"><i class="icon fa fa-area-chart fa-fw"
          aria-hidden="true"></i>Cronograma do curso</a>
      <a href="dashboardnotificacoes.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-bell-o fa-fw"
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
            <div class="timeline">
              <ul>
                <li>
                  <div class="contenttime">
                    <h3>Inicio de férias escolares</h3>
                    <p>De 01.08 a 31.08.2019</p>
                  </div>
                  <div class="time">
                    <h4>1 Agosto 2019</h4>
                  </div>
                </li>             
                <li>
                  <div class="contenttime">
                    <h3>Inicio da Época de Exames do segundo Semestre</h3>
                    <p>De 27.06 a 27.07.2019</p>
                  </div>
                   <div class="time">
                  <h4>27 junho 2019</h4>
                </div>
                </li>
                <li>
                <div class="contenttime">
                  <h3>Fim de Aulas do segundo Semestre</h3>
                  <p></p>
                </div>
                <div class="time">
                  <h4>22 junho 2019</h4>
                </div>
               </li>
               <li>                    
                <div class="contenttime">
                    <h3>Inicio de de atividade após pausa da Páscoa</h3>
                    <p></p>
                 </div>
                 <div class="time">
                    <h4>23 abril 2019</h4>
                  </div>
                </li>
                <li>
                  <div class="contenttime">
                    <h3>Interrupção de aulas da Páscoa</h3>
                    <p></p>
                  </div>
                  <div class="time">
                    <h4>8 abril 2019</h4>
                  </div>
                </li>
                <li>
                  <div class="contenttime">
                    <h3>Início das Aulas do segundo Semestre</h3>
                    <p><a target="_blank" href="docs/Horarios _Licenciaturas_2018_2019_2_semestre_Moodle.pdf ">Horarios Licenciaturas 2018/2019 - 2 Semestre </a></p>
                    </div>
                    <div class="time">
                      <h4>7 março 2019</h4>
                  </div>
                </li> 
                <li>
                    <div class="contenttime">
                      <h3>Inicio da Época de Exames do segundo Semestre</h3>
                      <p>De 28.01 a 02.03.2019</p>
                      </div>
                      <div class="time">
                        <h4>28 janeiro 2019</h4>
                    </div>
                </li>                    
                <li>
                    <div class="contenttime">
                      <h3>Fim de Aulas do primeiro Semestre</h3>
                      <p></p>
                      </div>
                      <div class="time">
                        <h4>22 janeiro 2019</h4>
                    </div>
                </li>    
                <li>
                    <div class="contenttime">
                      <h3>Inicio de de atividade após pausa de Natal</h3>
                      <p></p>
                      </div>
                      <div class="time">
                        <h4>3 janeiro 2019</h4>
                    </div>
                </li>                    
                <li>
                  <div class="contenttime">
                    <h3>Interrupção de aulas no Natal</h3>
                    <p></p>
                      </div>
                      <div class="time">
                        <h4>20 dezembro 2018</h4>
                    </div>
                    </li>    
                <li>
                  <div class="contenttime">
                    <h3>Início das Aulas do primeiro Semestre</h3>
                      <p>Cerimónia de Abertura do Ano Letivo 2018/19, dia 1 de outubro.</p>
                      <p><a target="_blank" href="docs/Horarios _Licenciaturas_2018_2019_1_semestre_final.pdf">Horarios Licenciaturas 2018/2019 - 1 Semestre </a></p>
                      </div>
                      <div class="time">
                     <h4>2 outubro 2018</h4>
                  </div>
                </li>                                                                        
              <div style="clear: both;"></div>
              </ul>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
  <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
</body>

</html>