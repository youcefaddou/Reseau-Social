
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/index.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <div class="main-container">
        <h1>Formulaire d'inscription</h1>
        <form action="/" method="POST">
            <div class="form-row">
                <input type="text" name="firstName" placeholder="Prénom">
                <input type="text" name="lastName" placeholder="Nom">
                <input type="email" name="mail" placeholder="Email">
                <input type="password" name="password" placeholder="Mot de passe">
                <button type="submit" name="register">S'inscrire</button>
            </div>
        </form>
        <p><?=isset($err) ? $err : ""?></p>
        <form action="" method="POST" class="table-form">
            <div class="table-responsive">
                <table>
                    
                    <!-- <?php foreach ($users as $entry) { ?>
                        <tr>
                            <?php if (!(isset($_POST["editView"]) && $_POST["editView"] == $entry['id'])) : ?>
                                <td><?= $entry['firstName'] ?> </td>
                                <td><?= $entry['lastName'] ?></td>
                                <td><?= $entry['mail'] ?></td>
                                <td><?= $entry['password'] ?></td>
                            <?php else : ?>
                                <td><input name="firstName" value="<?= $entry['firstName']; ?>"></td>
                                <td><input name="lastName" value="<?= $entry['lastName']; ?>"></td>
                                <td><input name="mail" value="<?= $entry['mail']; ?>"></td>
                                <td><input name="password" value="<?= $entry['password']; ?>"></td>
                            <?php endif; ?> -->
                            <!-- <td class="actions">
                                <button name="delete" value="<?= $entry['id'] ?>">Supprimer</button>
                                <?php if (!(isset($_POST["editView"]) && $_POST["editView"] == $entry['id'])) : ?>
                                    <button name="editView" value="<?= $entry['id'] ?>">Modifier</button>
                                <?php else : ?>
                                    <button name="update" value="<?= $entry['id'] ?>">Confirmer</button>
                                <?php endif; ?>
                            </td> -->
                        </tr>
                    <?php }

                    ?>
                </table>
            </div>
        </form>
    </div>
</body>

</html>