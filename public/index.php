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
// require_once('../src/controllers/MainController.php');
require_once('../src/controllers/RegisterController.php');
require_once('../src/controllers/LoginController.php');


$router = new Router();
$router->start();

?>

<!-- Connexion/Inscription/Déconnexion d’un Utilisateur

o Visualisation de l’ensemble des Post créés

o Un Post est défini a minima par un titre, un contenu et un auteur

o Possibilité de créer un nouveau Post, de supprimer ceux que vous avez posté ou de les modifier -->

<!-- Dans la DB socialnetwork, il y aura 2 tables: table User avec un idUser et un name,
                                              table Post avec un titre, un contenu et un auteur (foreign key de l'user)

Pour les controller, on aura plusieurs controllers: RegisterController, UpdateController, DeleteController, LoginController, LogoutController,


Pour le repositories, il y aura 2 fichiers, UserRepository pour envoyer les data vers la table User et PostRepository pour envoyer les data vers la table Post 

Pour les erreurs, on aura un fichier error pour pouvoir gérer les erreurs

Pour l'affichage, on aura un fichier main qui sera appelé dans le fichier public index.php -->