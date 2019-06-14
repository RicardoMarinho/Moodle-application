<?php
session_start();
if (isset($_SESSION['utilizador'])) {
?>
  <!DOCTYPE HTML>
  <html>

  <head>
    <meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ricardo Braz e Pedro Gomes" />
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
    <script src="assets/js/funcoes.js"></script>
    <link rel="stylesheet" href="assets\css\style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>

  <body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
      <div class="w3-bar-padd">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-bar-border w3-bar-active"><i class="icon fa fa-tachometer fa-fw" aria-hidden="true"></i>Painel de utilizador</a>
        <a href="dashboardDadosPessoais.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Os meus dados</a>
        <a href="noticias.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-newspaper-o fa-fw" aria-hidden="true"></i>Noticias</a>
        <a href="calendario.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-calendar fa-fw" aria-hidden="true"></i>Calendário</a>
        <a href="dashboardtimeline.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-area-chart fa-fw" aria-hidden="true"></i>Cronograma do curso</a>
        <a href="dashboardnotificacoes.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-bell-o fa-fw" aria-hidden="true"></i>Notificações</a>
        <a href="ficheiros.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-folder-o fa-fw" aria-hidden="true"></i>Os meus ficheiros</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-bar-border"><i class="icon fas fa-lock fa-fw" aria-hidden="true"></i>Sair</a>
      </div>
    </div>
    <div id="page">
      <header id="page-header" class="row">
        <div class="col-12 pt-3 pb-3"></div>
      </header>
      <div class="fixed-top navbar navbar-expand">
        <div data-region="drawer-toggle" class="d-inline-block mr-3">
          <button id="openNav" onclick="w3_open()" aria-expanded="true" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
            <i class="icon fa fa-bars fa-fw " aria-hidden="true"></i><span class="sr-only">Side panel</span></button>
        </div>
        <a href="#" class="navbar-brand d-sm-inline"><span class="site-name d-none d-md-inline">Moodle ISTEC</span></a>
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
          <li class="d-flex align-items-center username"><span><strong><?php echo $_SESSION['utilizador']; ?></strong></span></li>
          <li class="d-flex align-items-center"><span class="avatar current"><img src="images/perfilricardo.png" class="userpicture" width="50" height="50" role="presentation" aria-hidden="true"></span></li>
        </ul>
      </div>
      <div id="region-main-box" class="col-12">
        <section id="region-main" class="has-blocks mb-3 ml-3">
          <aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1">
            <section class=" block block_myoverview  card mb-3">
              <div class="card-body p-3">
                <h5 class="card-title d-inline">Course overview</h5>
                <div class="card-text content mt-3">
                  <div class="block-myoverview block-cards">
                    <div class="d-flex align-items-center flex-wrap">
                      <div class="dropdown m-b-1 mr-auto">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon fa fa-filter fa-fw " aria-hidden="true"></i>
                          <span class="d-sm-inline-block">Tudo</span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Tudo</a></li>
                          <li><a class="dropdown-item active" href="#">1º Ano</a></li>
                          <li><a class="dropdown-item disable" href="#">2º Ano</a></li>
                          <li><a class="dropdown-item disable" href="#">3º Ano</a></li>
                        </ul>
                      </div>
                      <div class="m-b-1 mr-1 d-flex align-items-center">
                        <div class="d-none d-md-inline-block mr-1">Ordenar por</div>
                        <div class="dropdown">
                          <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-sm-inline-block">Curso</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tudo</a></li>
                            <li><a class="dropdown-item active" href="#">Licenciatura de Informatica</a></li>
                            <li><a class="dropdown-item disable" href="#">Engenharia Multimedia</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="dropdown m-b-1">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle">
                          <i class="icon fa fa-th fa-fw " aria-hidden="true"></i>
                          <span class="d-sm-inline-block">Visualização</span>
                        </button>
                      </div>
                    </div>
                    <div class="container-fluid p-0 ">
                      <div class="paged-content-page-container ">
                        <div data-region="paged-content-page ">
                          <div class="card-deck dashboard-card-deck">
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/c.jpg)">
                                </div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Programação II
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" role="progressbar" aria-valuenow="0" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="small">
                                    <strong>0%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/ti.jpg)">
                                </div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Tecnologias de Internet II
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" style="width: 25%"></div>
                                  </div>
                                  <div class="small">
                                    <strong>25%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/aed.jpg)">
                                </div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Algoritmos e Estrutura de Dados
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" style="width: 65%"></div>
                                  </div>
                                  <div class="small">
                                    <strong>65%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/estatisticadescritiva.jpg)"></div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Estatística Descritiva
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" style="width: 10%"></div>
                                  </div>
                                  <div class="small">
                                    <strong>10%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/matematica.jpg)"></div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Matemática II
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" style="width: 10%"></div>
                                  </div>
                                  <div class="small">
                                    <strong>10%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card dashboard-card">
                              <a href="#">
                                <div class="card-img dashboard-card-img" style="background-image: url(images/redes.jpg)">
                                </div>
                              </a>
                              <div class="card-body-class pr-1 course-info-container">
                                <div class="d-flex align-items-start">
                                  <span class="multiline">
                                    Redes e Comunicações II
                                  </span>
                                  <div class="ml-auto">
                                    <a class="icon-size-3 icon coursemenubtn" href="#">
                                      <i class="icon fa fa-ellipsis-h fa-fw "></i>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer dashboard-card-footer border-0 bg-white">
                                  <div class="progress bg-white border">
                                    <div class="progress-bar bar" style="width: 30%"></div>
                                  </div>
                                  <div class="small">
                                    <strong>30%</strong> completado
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </aside>
        </section>
        <section data-region="blocks-column" class="d-print-none">
          <aside id="block-region-side-pre" class="block-region">
            <section class=" block block_timeline  card mb-3">
              <div class="card-body p-3">
                <h5 class="card-title d-inline">Cronograma</h5>
                <div class="card-text content mt-3">
                  <div class="block-timeline">
                    <div class="container pb-3 border-bottom">
                      <div class="row no-gutters">
                        <div class="col-sm d-flex justify-content-start">
                          <div class="dropdown">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon fa fa-clock-o fa-fw " aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-sm d-flex justify-content-end">
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon fa fa-filter fa-fw " aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container p-0">
                      <div class="text-xs-center text-center mt-3" data-region="empty-message" id="yui_3_17_2_1_1555612201078_1469">
                        <img src="images/activities.svg" alt="No upcoming activities due" style="height: 70px; width: 70px">
                        <p class="text-muted m-t-1">Nenhuma atividade a terminar brevemente</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </aside>
        </section>
      </div>

    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
  </body>

  </html>
<?php
} else header("Location: index.php");
?>