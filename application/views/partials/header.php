<!doctype html>
<html>

<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="#">
  <title>BanReservas</title>
  <link rel="icon" href="<?php echo base_url().'sources/images/favicon.png';?>">

  <!--Styles core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'sources/css/main.css';?>">
  <link rel="stylesheet" href="<?php echo base_url().'sources/css/owl.theme.default.min.css';?>">

</head>

<body>
  <header>
    <nav class="navbar navbar-default navbarperson">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="content-logos">
            <a class="navbar-brand  imgmaster" href="#"><img src="<?php echo base_url().'sources/images/logomaster.png';?>" alt="Logo MasterCard"></a>
            <a class="navbar-brand imgbanco" href="#"><img src="<?php echo base_url().'sources/images/logotipo.png';?>" alt="Logo BanReservas';?>"></a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse Menus" id="bs-example-navbar-collapse-1">
          <div class="row">
            <ul class="nav navbar-nav menu-top">
              <li class="username"><i class="fa fa-user-circle fa-lg" aria-hidden="true"><a href="#"><?=$name?></a></i></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television" aria-hidden="true fa-lg"></i> <span class="caret"></span></a>
                <ul class="dropdown-menu dispositivos">
                  <li>
                    <div class="dispositivo">
                      <h4>Conectar a un dispositivo</h4>
                      <img src="<?php echo base_url().'sources/images/dispositivos.png';?>" alt="">
                    </div>
                  </li>
                  <li>
                    <div class="disp-Atc col-md-12 col-sm-12 col-xs-12 col-xss-12">
                      <div class="imgdisp-Atc col-md-4 col-sm-4 col-xs-12 col-xss-12">
                        <i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
                      </div>
                      <div class="desdisp1 col-md-8 col-sm-8 col-xs-12 col-xss-12">
                        <ul class="listdis1">
                          <li><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></li>
                          <li>conectado en:</li>
                          <li>190.144.04.74</li>
                          <li>Colombia</li>
                          <li>iMac</li>

                        </ul>
                      </div>

                    </div>
                  </li>
                  <li>
                    <div class="disp col-md-12 col-sm-12 col-xs-12 col-xss-12">
                      <div class="imgdisp col-md-4 col-sm-4 col-xs-12 col-xss-12">
                        <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                      </div>
                      <div class="desdisp1 col-md-8 col-sm-8 col-xs-12 col-xss-12">
                        <ul class="listdis1">
                          <li><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></li>
                          <li>conectado en:</li>
                          <li>190.144.04.74</li>
                          <li>Colombia</li>
                          <li>iMac</li>
                        </ul>
                      </div>

                    </div>
                  </li>
                  <li>
                    <div class="disp col-md-12 col-sm-12 col-xs-12 col-xss-12">
                      <div class="imgdisp col-md-4 col-sm-4 col-xs-12 col-xss-12">
                        <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                      </div>
                      <div class="desdisp1 col-md-8 col-sm-8 col-xs-12 col-xss-12">
                        <ul class="listdis1">
                          <li><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></li>
                          <li>conectado en:</li>
                          <li>190.144.04.74</li>
                          <li>Colombia</li>
                          <li>iMac</li>
                        </ul>
                      </div>

                    </div>
                  </li>
                  <li>
                    <div class="rombomenu"></div>
                  </li>
                </ul>
              </li>
              <li><a href="home/goodBye"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="row">
            <ul id="menu-main" class="nav navbar-nav">
              <li class=""><a href="#">Mi meta</a></li>
              <li class=""><a data-scroll href="#allmetas">Historial de metas</a></li>
              <li class=""><a data-scroll href="#recomendacion">Historial de premios</a></li>
              
            </ul>
          </div>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
