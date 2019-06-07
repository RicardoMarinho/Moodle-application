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
  <title>Calendário</title>
</head>

<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <div class="w3-bar-padd">
      <a href="dashboard.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-tachometer fa-fw"
          aria-hidden="true"></i>Painel de utilizador</a>
      <a href="dashboardDadosPessoais.html" class="w3-bar-item w3-button w3-bar-border"><i
          class="icon fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Os meus dados</a>
      <a href="noticias.html" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-newspaper-o fa-fw"
          aria-hidden="true"></i>Noticias</a>
      <a href="calendario.html" class="w3-bar-item w3-button w3-bar-border w3-bar-active"><i
          class="icon fa fa-calendar fa-fw" aria-hidden="true"></i>Calendário</a>
      <a href="#" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-area-chart fa-fw"
          aria-hidden="true"></i>Cronograma do curso</a>
      <a href="#" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-bell-o fa-fw"
          aria-hidden="true"></i>Notificações</a>
      <a href="#" class="w3-bar-item w3-button w3-bar-border"><i class="icon fa fa-folder-o fa-fw"
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
      <section id="region-main" class="has-blocks mb-3 ml-3">
        <aside id="block-region-content" class="block-region" data-blockregion="content" data-droptarget="1">
          <section class=" block block_myoverview  card mb-3">
            <div class="card-body p-3">
              <div role="main">
                <div data-region="calendar" class="maincalendar">
                  <div class="heightcontainer">
                    <h2>Calendário</h2>
                    <div>
                      <div class="calendarwrapper">
                        <div class="controls">
                          <div class="calendar-controls">
                            <a href="#" class="arrow_link previous atitle" title="Previous month">
                              <i class="icon fa fa-arrow-left fa-fw" aria-hidden="true"></i>
                              &nbsp;
                              <span class="arrow_text">Março 2019</span>
                            </a>
                            <span class="hide"> | </span>
                            <h2 class="current">Abril 2019</h2>
                            <span class="hide"> | </span>
                            <a href="#" class="arrow_link next atitle" title="Next month">
                              <span class="arrow_text">Maio 2019</span>
                              &nbsp;
                              <i class="icon fa fa-arrow-right fa-fw" aria-hidden="true"></i>
                            </a>
                          </div>
                        </div>
                        <table class="calendarmonth calendartable m-b-0">
                          <thead>
                            <tr>
                              <th class="header text-xs-center">
                                Domingo
                              </th>
                              <th class="header text-xs-center">
                                Segunda
                              </th>
                              <th class="header text-xs-center">
                                Terça
                              </th>
                              <th class="header text-xs-center">
                                Quarta
                              </th>
                              <th class="header text-xs-center">
                                Quinta
                              </th>
                              <th class="header text-xs-center">
                                Sexta
                              </th>
                              <th class="header text-xs-center">
                                Sábado
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr data-region="month-view-week">
                              <td class="dayblank">&nbsp;</td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554073200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554132935">
                                <div class=" pt-3 text-md-center">
                                  1
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554159600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554219335">
                                <div class="pt-3 text-xs-center">
                                  2
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554246000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554305735">
                                <div class="pt-3 text-xs-center">
                                  3
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554332400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554392135">
                                <div class="pt-3 text-xs-center">
                                  4
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554418800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554478535">
                                <div class="pt-3 text-xs-center">
                                  5
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1554505200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554564935">
                                <div class="pt-3 text-xs-center">
                                  6
                                </div>
                              </td>
                            </tr>
                            <tr data-region="month-view-week">
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1554591600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554651335">
                                <div class="pt-3 text-xs-center">
                                  7
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554678000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554737735">
                                <div class="pt-3 text-xs-center">
                                  8
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554764400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554824135">
                                <div class="pt-3 text-xs-center">
                                  9
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554850800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554910535">
                                <div class="pt-3 text-xs-center">
                                  10
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1554937200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1554996935">
                                <div class="pt-3 text-xs-center">
                                  11
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555023600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555083335">
                                <div class="pt-3 text-xs-center">
                                  12
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1555110000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555169735">
                                <div class="pt-3 text-xs-center">
                                  13
                                </div>
                              </td>
                            </tr>
                            <tr data-region="month-view-week">
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1555196400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555256135">
                                <div class="pt-3 text-xs-center">
                                  14
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555282800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555342535">
                                <div class="pt-3 text-xs-center">
                                  15
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555369200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555428935">
                                <div class="pt-3 text-xs-center">
                                  16
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555455600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555515335">
                                <div class="pt-3 text-xs-center">
                                  17
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555542000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555601735">
                                <div class="pt-3 text-xs-center">
                                  18
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555628400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555688135">
                                <div class="pt-3 text-xs-center">
                                  19
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left today weekend " data-day-timestamp="1555714800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555774535">
                                <div class="pt-3 text-xs-center">
                                  20
                                </div>
                              </td>
                            </tr>
                            <tr data-region="month-view-week">
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1555801200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555860935">
                                <div class="pt-3 text-xs-center">
                                  21
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555887600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1555947335">
                                <div class="pt-3 text-xs-center">
                                  22
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1555974000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556033735">
                                <div class="pt-3 text-xs-center">
                                  23
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1556060400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556120135">
                                <div class="pt-3 text-xs-center">
                                  24
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1556146800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556206535">
                                <div class="pt-3 text-xs-center">
                                  25
                                </div>
                                <div class="day-content text-md-left">
                                  <ul class="pl-3">
                                    <li>
                                      <a href="#" title="Trabalho HTML5 TI">
                                        <img class="icon " src="images/assigment.svg" alt="" title="">
                                        <span class="xs-size text-muted">Trabalho HTML5 TI</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1556233200"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556292935">
                                <div class="pt-3 text-xs-center">
                                  26
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left weekend" data-day-timestamp="1556319600"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556379335">
                                <div class="pt-3 text-xs-center">
                                  27
                                </div>
                              </td>
                            </tr>
                            <tr data-region="month-view-week">
                              <td class="day text-sm-center text-md-left weekend " data-day-timestamp="1556406000"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556465735">
                                <div class="pt-3 text-xs-center">
                                  28
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1556492400"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556552135">
                                <div class="pt-3 text-xs-center">
                                  29
                                </div>
                              </td>
                              <td class="day text-sm-center text-md-left " data-day-timestamp="1556578800"
                                data-drop-zone="month-view-day" data-region="day" data-new-event-timestamp="1556638535">
                                <div class="pt-3 text-xs-center">
                                  30
                                </div>
                              </td>
                              <td class="dayblank">&nbsp;</td>
                              <td class="dayblank">&nbsp;</td>
                              <td class="dayblank">&nbsp;</td>
                              <td class="dayblank">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
          </section>
        </aside>
      </section>
      <section data-region="blocks-column" class="d-print-none">
        <aside class="block-region">
          <section class=" block block_timeline  card mb-3">
            <div class="card-body p-3">
              <h5 class="card-title d-inline">Tipo de eventos</h5>
              <div class="card-text content mt-3">
                <div class="calendar_filters m-t-2">
                  <ul>
                    <li>
                      <a href="#" class="atitle">
                        <span class="calendar_event_site">
                          <i class="icon fa fa-eye fa-fw " title="Hide global events"></i>
                        </span>
                        <i class="icon fa fa-globe fa-fw " aria-hidden="true"></i>
                        <span class="eventname">Ocultar eventos do site</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="atitle">
                        <span class="calendar_event_category">
                          <i class="icon fa fa-eye fa-fw " title="Hide category events"></i>
                        </span>
                        <i class="icon fa fa-cubes fa-fw " aria-hidden="true"></i>
                        <span class="eventname">Ocultar eventos da categoria</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="atitle">
                        <span class="calendar_event_course">
                          <i class="icon fa fa-eye fa-fw " title="Hide course events"></i>
                        </span>
                        <i class="icon fa fa-university fa-fw " aria-hidden="true"></i>
                        <span class="eventname">Ocultar eventos da disciplina</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="atitle">
                        <span class="calendar_event_group">
                          <i class="icon fa fa-eye fa-fw " title="Hide group events"></i>
                        </span>
                        <i class="icon fa fa-group fa-fw " aria-hidden="true"></i>
                        <span class="eventname">Ocultar eventos do grupo</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="atitle">
                        <span class="calendar_event_user">
                          <i class="icon fa fa-eye fa-fw " title="Hide user events"></i>
                        </span>
                        <i class="icon fa fa-user fa-fw " aria-hidden="true"></i>
                        <span class="eventname">Ocultar eventos do utilizador</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="footer"></div>
              </div>
            </div>
          </section>
        </aside>
      </section>
    </div>
  </div>
  <script src="https://use.fontawesome.com/00df0b3ac0.js"></script>
</body>

</html>