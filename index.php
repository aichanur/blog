<?php 

require_once('config/Router.php');
//apres avoir appelle la classe, je l'instancie
$router = new Router();

$router->routeReq();

 ?>