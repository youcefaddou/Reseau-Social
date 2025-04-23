<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="./assets/login.css">
</head>
<body>
<h1 class="site-title">Social HUB</h1>
<div class="main-container">
    <h2 class="form-title">Se connecter</h2>
    <form class="registerContainer" action="/login" method="POST">
        <div class="form-row">
            <input type="email" name="mail" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit" name="login">Se connecter</button>
        </div>
    </form>
    <p><?= isset($err) ? $err : "" ?></p>
</div>
</body>
</html>