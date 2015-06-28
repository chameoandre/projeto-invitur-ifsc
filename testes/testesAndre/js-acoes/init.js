/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Inicializando o Layout contraído para os forms */

$(document).ready(function () {
    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    $(".dropdown-button").dropdown(); //carregando os menus dropdown
    $('.button-collapse').sideNav(); //carregando os menus contraídos
    //$('.parallax').parallax(); //para deixar as imagens da home com efeito paralax
}); 