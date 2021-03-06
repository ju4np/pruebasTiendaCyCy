<?php
session_start();
//Comprobamos si hay sesion iniciada, si la hay no creamos una nueva
//////////////////////////////////////////////////////////////////
//     Con print_r imprimimos el contenido de una variable      //
//              print_r ($_SESSION["carrito"])                  //
//   por ejemplo aqui imprimimos el array de arrays carrito     //
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
//Para sacar el elemento 1 del primer array se usa esta sintaxis//
//              $_SESSION["carrito"][0][0];                     //
//          ya que los puntos en php son concatenacion          //
//////////////////////////////////////////////////////////////////     
require_once('../../commons/php/Services_JSON.php');

if (isset($_SESSION["user"])) {
    $datos=$_SESSION["carrito"];
    $oJson = new Services_JSON();
    echo $oJson->encode($datos);
} else {
	$_SESSION["idUser"] = -1;
    $_SESSION["user"] = "Invitado";
    $_SESSION["carrito"]=array();
    $datos=$_SESSION["carrito"];
    $oJson = new Services_JSON();
    echo $oJson->encode($datos);
}