<?php
require_once 'libs/Router.php';
require_once("app/controller.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('artistas', 'GET', 'controller', 'getArtistas');
$router->addRoute('artistas/:COLUMNA/:ORDEN', 'GET', 'controller', 'getArtistas');
$router->addRoute('artistas/:ID', 'GET', 'controller', 'getArtista');
$router->addRoute('artistas', 'POST', 'controller', 'addArtista');
$router->addRoute('artistas/:ID', 'PUT', 'controller', 'updateArtista');
$router->addRoute('artistas/:ID', 'DELETE', 'controller', 'deleteArtista');
$router->addRoute('albumes', 'GET', 'controller', 'getAlbumes');
$router->addRoute('albumes/:COLUMNA/:ORDEN', 'GET', 'controller', 'getAlbumes');
$router->addRoute('albumes/filtro/:COLUMNA/:LOGICA/:PARAMETRO', 'GET', 'controller', 'getAlbumesFiltro');
$router->addRoute('albumes/paginar/:PAGINA/:LIMITE', 'GET', 'controller', 'getAlbumesPaginar');
$router->addRoute('albumes/:ID', 'GET', 'controller', 'getAlbumes');
$router->addRoute('albumes', 'POST', 'controller', 'addAlbum');
$router->addRoute('albumes/:ID', 'PUT', 'controller', 'updateAlbum');
$router->addRoute('albumes/:ID', 'PUT', 'controller', 'deleteAlbum');
$router->addRoute('albumes/:ID', 'DELETE', 'controller', 'deleteAlbum');

// rutea
$router->route($resource, $method);

