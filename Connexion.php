<?php
$bdd = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['envoyer'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $req = $bdd->prepare('SELECT id_utilisateur, email, password FROM utilisateur WHERE email = :email');
        $req->execute(['email' => $email]);
        $user = $req->fetch();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['id_user'] = $user['id_utilisateur'];
                $_SESSION['email'] = $user['email'];
                header('location:index.php');
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Utilisateur non trouvé.";
        }
    } else {
        echo "Tous les champs doivent être remplis.";
    }
}
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Connexion</h1>
    <form action="" method="post">
        <label for="email">Adresse mail</label><br>
        <input type="email" name="email" id="email" required/><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" required/><br><br>

        <input type="submit" name="envoyer" id="envoyer" value="Se connecter"/>
        <?php
        if (isset($message)) :
            ?>
            <?= $message ?><p></p>
        <?php endif; ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
