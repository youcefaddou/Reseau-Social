<?php

if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit;
}
$user = $_SESSION['user'];
?>
<?php
require_once '../src/models/repositories/PostRepository.php';
$posts = PostRepository::getAllPosts();
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
            <form class="post-form" action="/post/create" method="POST">
                <input type="text" name="title" placeholder="Titre du post" class="post-title-input">
                <textarea name="content" placeholder="Votre message..." class="post-content-textarea"></textarea>
                <button type="submit" class="post-submit-btn">Publier</button>
            </form>
        </div>
        <div class="posts-list">
        <h2>Fil des Posts</h2>
        <?php foreach ($posts as $post): ?>
            <div class="post-card">
                <div class="post-header">
                    <span class="post-title"><?= htmlspecialchars($post['title']) ?></span>
                    <span class="post-author">par <?= htmlspecialchars($post['firstName']) ?></span>
                </div>
                <div class="post-content">
                    <?php if (isset($_POST["editView"]) && $_POST["editView"] == $post['id']): ?>
                        <form action="/post/edit" method="POST" class="post-form">
                            <input type="hidden" name="id" value="<?= $post['id'] ?>">
                            <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" class="post-title-input">
                            <textarea name="content" class="post-content-textarea"><?= htmlspecialchars($post['content']) ?></textarea>
                            <button class="post-confirm-btn" type="submit">Confirmer</button>
                        </form>
                    <?php else: ?>
                        <?= nl2br(htmlspecialchars($post['content'])) ?>
                    <?php endif; ?>
                </div>
                <?php if ($post['user_id'] == $user['id']): ?>
                <div class="post-actions">
                    <?php if (!(isset($_POST["editView"]) && $_POST["editView"] == $post['id'])): ?>
                        <form action="" method="POST">
                            <input type="hidden" name="editView" value="<?= $post['id'] ?>">
                            <button class="post-edit-btn" type="submit">Modifier</button>
                        </form>
                    <?php endif; ?>
                    <form action="/post/delete" method="POST">
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <button class="post-delete-btn" type="submit">Supprimer</button>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</body>
</html>