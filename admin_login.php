
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Administrateur</title>
    <link rel="stylesheet" href="style_admin.css">

<body>
<?php

    $erreur = null;

    $password = '$2y$10$qV/M2ldlOeGTmYxkLa4i5uJKgHnrPeIyzfUQylero2iP3YEK9Cfle'; // le suis le hash du mot de passe (Ross)

    if (isset($_POST['send'])) {  

            if ($_POST['pseudo'] === 'Karim' && password_verify($_POST['password'], $password)) {
                session_start();
                $_SESSION['connecte'] = 1; // stoqué son état de connexion
                 header("Location: index.php");//redirection vers la page d'acceuil
                    exit();
            } else {
            
            $erreur = "Identifiants incorrects";
            }
        }

?>

    <div class="form-container">
        <h2>Connexion Administrateur</h2>
        <form id="admin-login-form" action="admin_login.php" method="POST">
            <label for="admin-pseudo">PSEUDO:</label>
            <input type="pseudo" id="admin-pseudo" name="pseudo" required>
            <label for="admin-password">Mot de passe:</label>
            <input type="password" id="admin-password" name="password" required>
            <button type="submit" name="send">Se connecter</button>
        </form>
    </div>
    <script src="admin_login.js"></script>
</body>
</html>
