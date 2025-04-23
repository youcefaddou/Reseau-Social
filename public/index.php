<?php

//db et Router
require_once('../core/Router.php');
require_once("../src/models/Db.php");
//les repositories
require_once("../src/models/repositories/PostRepository.php");
require_once("../src/models/repositories/UserRepository.php");
//modeles
require_once("../src/models/Post.php");
require_once("../src/models/User.php");
//le controller abstract
require_once('../src/controllers/Controller.php');
//les autres controlleurs
require_once('../src/controllers/MainController.php');
require_once('../src/controllers/RegisterController.php');
require_once('../src/controllers/LoginController.php');
require_once('../src/controllers/PostController.php');

$router = new Router();
$router->start();

?>
