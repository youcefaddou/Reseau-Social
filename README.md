Connexion/Inscription/Déconnexion d’un Utilisateur

o Visualisation de l’ensemble des Post créés

o Un Post est défini a minima par un titre, un contenu et un auteur

o Possibilité de créer un nouveau Post, de supprimer ceux que vous avez posté ou de les modifier 


Le Plan:

Dans la DB socialnetwork, il y aura 2 tables: table User avec un idUser et un name,
                                              table Posts avec un titre, un contenu et un auteur (foreign key de l'user)

Pour les controller, on aura plusieurs controllers: un abstract Controller, RegisterController, MainController, PostController, LoginController, LogoutController,


Pour le repositories, il y aura 2 fichiers, UserRepository pour envoyer les data vers la table User et PostRepository pour envoyer les data vers la table Post 

Pour les erreurs, on aura un fichier error pour pouvoir gérer les erreurs majeures

Pour l'affichage, on aura un fichier main pour la page de posts, un fichier login, un fichier register, tous appelés dans index.php