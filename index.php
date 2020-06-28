<?php
//Chargement dynamique  des classes=> AutoLoading
define("BASE_URL", "http://localhost/PROJET3_POO");
require_once "./libs/Router.php";
$route = new Router();
$route->route();
