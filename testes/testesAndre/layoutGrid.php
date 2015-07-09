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
   <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="materialize/js/materialize.js"></script>
  <script src="js-acoes/init.js"></script>
  
</head>
<body>
    <header>
        <!-- Navbar goes here -->
        <nav>
             <div class="nav-wrapper">
               <a href="#!" class="brand-logo">Projeto Invitur - IFSC Garopaba</a>
               <ul class="right hide-on-med-and-down">      
                 <!-- Dropdown Trigger -->
                 <li><a class="dropdown-button" href="#!" data-activates="formulariosA">Categoria A<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a class="dropdown-button" href="#!" data-activates="formulariosB">Categoria B<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a class="dropdown-button" href="#!" data-activates="formulariosC">Categoria C<i class="material-icons right">arrow_drop_down</i></a></li>

               </ul>
             </div>
        </nav>
        <!-- Início do conteúdo a ser carregado no menu dropbown -->
           <ul id="formulariosA" class="dropdown-content">
               <li><a href="formularios/form-invitur-A1.php">A1 - Informações Básicas do Município</a></li>
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
    </header>
    <main>
    <!-- Page Layout here -->
        <div class="row">

            <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
                <!-- Grey navigation panel, This content will be:
                  3-columns-wide on large screens,
                  4-columns-wide on medium screens,
                  12-columns-wide on small screens  -->
             Coluna esquerda
            </div>
            <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
                <!-- Teal page content

                      This content will be:
                  9-columns-wide on large screens,
                  8-columns-wide on medium screens,
                  12-columns-wide on small screens  -->
             Centro da página
            </div>

        </div> 
    </main>
    <footer>
        
    </footer>
</body>
</html>

