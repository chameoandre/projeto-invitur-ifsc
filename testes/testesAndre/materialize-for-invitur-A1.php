<?php
    include './banco-estruturado/conecta.php';
    $sqlListaUf = "select * from uf";
    $resultadoUf = mysql_query($sqlListaUf, $conexao);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário - Categoria A1 - Informações Básicas do Município</title>
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css" media="screen" />
        <script src="jquery/jquery-1.11.3.min_1.js"></script>
        <script src="materialize/js/materialize.js"></script>
        <script src="js-acoes/init.js"></script>
    </head>
    <body>
        <form class="" action="">
            <h3>CATEGORIA A1 - INFORMAÇÕES BÁSICAS DO MUNICÍPIO  </h3>

           <!-- Início do layout collapse (contraído) -->
            <ul class="collapsible" data-collapsible="accordion"> <!-- Possiveis data: collapsible, expandable, accordion-->
                <li>
                    <!-- Primeira Seção ---------------------- -->
                    <div class="collapsible-header"><i class="mdi-social-location-city"></i>Identificação</div>
                        <div class="collapsible-body">
                            <div class="row">
                               
                                <!-- select dos estados -->
                                <div class="input-field col s3">
                                     <select class="browser-default" id="selUf" name="selUf">
                                         <?php
                                          while($elementoUf = mysql_fetch_array($resultadoUf)){
                                              $siglaUf = $elementoUf['siglaUF'];
                                              $idUf = $elementoUf['idUf'];
                                              echo "<option value='$idUf'>$siglaUf</option>";
                                          }
                                         ?>
                                    </select>
                                   <!-- <label>Selecione a UF</label>-->
                                </div>
                                
                                <div class="input-field col s3">
                                    <i class="mdi-maps-place prefix"></i>
                                    <input value="" id="txtRegTuristica" type="text" class="validate" required>
                                    <label class="active" for="txtRegTuristica">REGIÃO TURÍSTICA</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="mdi-communication-business prefix"></i>
                                    <input value="" id="txtNomeMunicipio" type="text" class="validate">
                                    <label class="active" for="txtNomeMunicipio">MUNICÍPIO</label>
                                </div>
                            </div>  
                        
                        
                        <div class="row">
                            <div class="input-field col s7">
                                    <i class="mdi-social-whatshot"></i>
                                    <input value="" id="txtCaracterizacaoMun" type="text" class="validate">
                                    <label class="active" for="txtCaracterizacaoMun">CARACTERIZAÇÃO DO MUNICÍPIO</label>
                                </div>
                        </div>
                        </div>    
                </li>
                <li>
                    <!-- Segunda Seção -------------------------------------------------- -->
                    <div class="collapsible-header"><i class="mdi-maps-rate-review"></i>1. Informações Gerais</div>
                        <!-- Início do corpo contraído-->
                    <div class="collapsible-body">
                        <h5>1.1 Endereço da Prefeitura</h5>
                        <div class="row">
                                <div class="input-field col s3">
                                    <i class="mdi-maps-local-library prefix"></i>
                                    <input value="" id="txtTipoEndereco" type="text" class="validate">
                                    <label class="active" for="txtTipoEndereco">Avenida/travessa/caminho/outro</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="mdi-maps-local-library prefix"></i>
                                    <input value="" id="txtBairro" type="text" class="validate">
                                    <label class="active" for="txtBairro">Bairro</label>
                                </div>
                                
                                <div class="input-field col s3">
                                    <i class="mdi-maps-local-library prefix"></i>
                                    <input value="" id="txtCep" type="text" class="validate">
                                    <label class="active" for="txtCep">CEP</label>
                                </div>
                        </div>
                        
                        <div class="row-fluid">
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
            </ul>
            <br><button type="submit" class="btn">Avançar</button>
        </form>
    </body>
</html>
