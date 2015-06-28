<?php
    include './banco-estruturado/conecta.php';
?>

<!DOCTYPE html>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Projeto Invtur - Inventariação Turística do Município de Garopaba-SC</title>

  <!-- CSS  -->
  <link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- para carregar os ícones de setas de menus-->
</head>
<body>
  <!-- Dropdown Structure -->
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">      
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="formulariosA">Categoria A<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="formulariosB">Categoria B<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="formulariosC">Categoria C<i class="material-icons right">arrow_drop_down</i></a></li>
      
    </ul>
  </div>
</nav>
    <ul id="formulariosA" class="dropdown-content">
    <li><a href="#!">A1 - Informações Básicas do Município</a></li>
    <li class="divider"></li>
    <li><a href="#!">A2.1.1 - Rodoviário - Rodovia</a></li>
    <li><a href="#!">A2.1.2 - Rodoviário - Estação Rodoviária</a></li>
    <li><a href="#!">A2.2.1 - Ferroviário - Ferrovia e Metrovia</a></li>
    <li><a href="#!">A2.2.2 - Ferroviário - Estação Ferroviária</a></li>
    <li><a href="#!">A2.3 - Aeroviário - Aeroporto e Campo de Pouso</a></li>
    <li><a href="#!">A2.3 - Aeroviário - Heliporto</a></li>
    <li><a href="#!">A2.4.1- Aquaviário - Hidrovia</a></li>
    <li><a href="#!">A2.4.2- Aquaviário - Porto, Píer, Cais, etc.</a></li>
    <li class="divider"></li>
    <li><a href="#!">A3 - Sistema de Comunicação</a></li>
    <li><a href="#!">A4 - Sistema de Segurança</a></li>
    <li><a href="#!">A5 - Sistema de Saúde</a></li>
    <li><a href="#!">A6 - Sistema Educacional</a></li>
    <li class="divider"></li>
    <li><a href="#!">A7.1 - Locadoras de Imóveis para Temporada</a></li>
    <li><a href="#!">A7.2 - Compras Especiais</a></li>
    <li><a href="#!">A7.3 - Comércio Turístico</a></li>
    <li><a href="#!">A7.4 - Serviços Bancários</a></li>
    <li><a href="#!">A7.5.6 - Serviços Mecânicos e Posto de Combustível</a></li>
    <li><a href="#!">A7.7 - Representações Diplomáticas</a></li>
  </ul>
  
  
  
  <!-- teste de menu para os formulários A até C 
  Recurso utilizado: javaScript - Badges: Collapsible HTML Structure - accordion
  -->
  <div class="row">
    <div class="col s4">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons">filter_drama</i>Formulários: Categoria A</div>
              <div class="collapsible-body">
                  <!-- Inserido teste para itens collapsible contendo listas. Foi alterada a class da lista para collapsible com êxito-->
                  <ul id="menuFormulariosA" class="collapsible">
                    <li><a href="#!">A1 - Informações Básicas do Município</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">A2.1.1 - Rodoviário - Rodovia</a></li>
                    <li><a href="#!">A2.1.2 - Rodoviário - Estação Rodoviária</a></li>
                    <li><a href="#!">A2.2.1 - Ferroviário - Ferrovia e Metrovia</a></li>
                    <li><a href="#!">A2.2.2 - Ferroviário - Estação Ferroviária</a></li>
                    <li><a href="#!">A2.3 - Aeroviário - Aeroporto e Campo de Pouso</a></li>
                    <li><a href="#!">A2.3 - Aeroviário - Heliporto</a></li>
                    <li><a href="#!">A2.4.1- Aquaviário - Hidrovia</a></li>
                    <li><a href="#!">A2.4.2- Aquaviário - Porto, Píer, Cais, etc.</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">A3 - Sistema de Comunicação</a></li>
                    <li><a href="#!">A4 - Sistema de Segurança</a></li>
                    <li><a href="#!">A5 - Sistema de Saúde</a></li>
                    <li><a href="#!">A6 - Sistema Educacional</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">A7.1 - Locadoras de Imóveis para Temporada</a></li>
                    <li><a href="#!">A7.2 - Compras Especiais</a></li>
                    <li><a href="#!">A7.3 - Comércio Turístico</a></li>
                    <li><a href="#!">A7.4 - Serviços Bancários</a></li>
                    <li><a href="#!">A7.5.6 - Serviços Mecânicos e Posto de Combustível</a></li>
                    <li><a href="#!">A7.7 - Representações Diplomáticas</a></li>
                  </ul>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">place</i>Formulários: Categoria B</div>
              <div class="collapsible-body">
                  <ul id="menuFormulariosB" class="collapsible">
                    <li><a href="#!">B1.1 - Meios de Transporte</a></li>
                    <li><a href="#!">B1.2 - Outro tipo de Acomodação</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">B2 - Serviços e equipamentos para alimentos e bebidas</a></li>
                    <li><a href="#!">B3 - Serviços e equipamentos para agências de turismo</a></li>
                    <li><a href="#!">B4 - Serviços e equipamentos de transporte turístico</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">B5.1 - Espaço para eventos</a></li>
                    <li><a href="#!">B5.2 - Serviços para eventos</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">B6.1 - Parques</a></li>
                    <li><a href="#!">B6.2 - Espaços livres e áreas verdes</a></li>
                    <li><a href="#!">B6.3 - Instalações esportivas</a></li>
                    <li><a href="#!">B6.4 - Instalações náuticas</a></li>
                    <li><a href="#!">B6.5 - Espaços de diversão e cultura</a></li>
                    <li><a href="#!">B6.6 - Outros espaços de recreação</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">B7.1 - Informações turísticas</a></li>
                    <li><a href="#!">B7.2 - Entidades associativas e similares</a></li>
                    <li><a href="#!">B7.3 - Guiamento e condução turística</a></li>
                  </ul>
              </div>
            </li>
            
            <li>
              <div class="collapsible-header"><i class="material-icons">place</i>Formulários: Categoria C</div>
              <div class="collapsible-body">
                  <ul id="menuFormulariosC" class="collapsible">
                    <li><a href="#!">C1.1 - Relevo Continental</a></li>
                        <li><a href="#!">C1.2 - Zona Costeira</a></li>
                        <li><a href="#!">C1.3 - Relevo Cárstico</a></li>
                        <li><a href="#!">C1.4 - Hidrografia</a></li>
                        <li><a href="#!">C1.5 - Unidade de conservação</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">C2.1 - Conjuntos arquitetônicos</a></li>
                        <li><a href="#!">C2.10 - Arquitetura civil</a></li>
                        <li><a href="#!">C2.11 a 13 - Arquitetura oficial, militar e religiosa</a></li>
                        <li><a href="#!">C2.14 a 17 - Agricultura industrial, agrícola e funerária</a></li>
                        <li><a href="#!">C2.18- Obras de interesse artístico</a></li>
                        <li><a href="#!">C2.19 a 24- Ruínas, centrol cultural, teatro, cineblub</a></li>
                        <li><a href="#!">C2.22 a 26- Sítios e etc</a></li>
                        <li><a href="#!">C2.25 a 27- Gastronomia, artesanato, trabalhos manuais</a></li>
                        <li><a href="#!">C2.28- Formas de expressão</a></li>
                        <li><a href="#!">C2.29- Personalidades</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">C2.7 a 9 - Lugares de manifestações de fé</a></li>
                        <li><a href="#!">C2.3 - Atividades econômicas</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">C4 - Atrações técnicas e científicas</a></li>
                        <li><a href="#!">C5 - Eventos programados</a></li>
                  </ul>
              </div>
            </li>
          </ul>
    </div>
  </div> 
  
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Projeto Invitur - Ifsc Garopaba</h1>
        <div class="row center">
          <h5 class="header col s12 light">Plataforma responsíva para realização do Inventariado Turístico da região de Garopaba</h5>
        </div>
        <div class="row center">
            <a href="materialize-for-invitur-A1.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">A1 - Municípios</a>
          <!-- <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">A2.1.1 - Rodovia</a>-->
        </div>
        <br><br>

      </div>
    </div>
      <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-image-flash-on"></i></h2>
            <h5 class="center">Categoria A</h5>

            <p class="light">Formulários contendo informações básicas do município e de serviços de Transporte.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-social-group"></i></h2>
            <h5 class="center">Categoria B</h5>

            <p class="light">Formulários para cadastros de Meios de hospedagem, serviços e equipamentos de agências de turismo, instalações diversas e entidades diversas.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
            <h5 class="center">Categoria C</h5>

            <p class="light">Formulários para cadastro de informações sobre o relevo, hidrografia, obras, gastronomia e atrações técnicas e científicas.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
      
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="materialize/js/materialize.js"></script>
  <script src="js-acoes/init.js"></script>

  </body>
</html>


