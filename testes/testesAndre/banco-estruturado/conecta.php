<?php
$conexao        = mysql_connect("mysql16.chameoandre.com","chameoandre13","invitur2015@");
$nomeBanco      = "chameoandre13";
mysql_select_db($nomeBanco,$conexao) or die("Não foi possível conectar no banco de dados");
/* 
 * Arquivo de conexão com o banco de dados criado para ser utilizado enqunato a classe de conexão
 * não for implementada;
 * 
 */

