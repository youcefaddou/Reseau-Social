<?php
if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page principale</title>
    <link rel="stylesheet" href="./assets/index.css">
    <link rel="stylesheet" href="./assets/main.css">
</head>
<body>
    <div class="logout-container">
        <form action="/logout" method="POST">
            <button type="submit" class="LogoutButton">Se déconnecter</button>
        </form>
    </div>
    <h1 class="site-title">Bienvenue, <?= htmlspecialchars($user['firstName']) ?> <?= htmlspecialchars($user['lastName']) ?> !</h1>
    <div class="main-container">
        <div class="post-create-container">
            <h2>Créer un nouveau post</h2>
            <form class="post-form">
                <input type="text" name="title" placeholder="Titre du post" class="post-title-input" required>
                <textarea name="content" placeholder="Votre message..." class="post-content-textarea" required></textarea>
                <button type="submit" class="post-submit-btn">Publier</button>
            </form>
        </div>
        <div class="posts-list-container">
            <h2>Posts récents</h2>
            <div class="posts-list">
                <div class="post-card">
                    <div class="post-header">
                        <span class="post-title">Titre du post</span>
                        <span class="post-author">par Auteur</span>
                    </div>
                    <div class="post-content">
                        Contenu du post...
                    </div>
                    <div class="post-actions">
                        <button class="post-edit-btn">Modifier</button>
                        <button class="post-delete-btn">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>