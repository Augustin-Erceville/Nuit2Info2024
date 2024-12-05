<?php
$bdd = new PDO('mysql:host=localhost;dbname=nuit2info', 'root', '');
session_start();

if (isset($_POST['envoyer'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $naissance = $_POST['naissance'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!empty($prenom) && !empty($nom) && !empty($naissance) && !empty($telephone) &&
        !empty($email) && !empty($password)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $req = $bdd->prepare('INSERT INTO utilisateur (prenom, nom, telephone, email, password, naissance) VALUES (:prenom, :nom, :telephone, :email, :password, :naissance)');
            $success = $req->execute([
                'prenom' => $prenom,
                'nom' => $nom,
                'telephone' => $telephone,
                'email' => $email,
                'password' => $password,
                'naissance' => $naissance
            ]);

            if ($success) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            } else {$message = "Erreur lors de l'inscription. Veuillez réessayer.";}
        } else {$message = "Adresse email invalide.";}
    } else {$message = "Tous les champs sont obligatoires.";
    }}
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Inscription</h1>
    <form action="" method="post">
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" required/><br>

        <label for="nom">Nom de famille</label><br>
        <input type="text" name="nom" id="nom" required/><br>

        <label for="naissance">Date de naissance</label><br>
        <input type="date" name="naissance" id="naissance" required/><br>

        <label for="telephone">Numéro de téléphone</label><br>
        <input type="tel" name="telephone" id="telephone" required/><p></p>

        <label for="email">Adresse mail</label><br>
        <input type="email" name="email" id="email" required/><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" required/><p></p>

        <input type="submit" name="envoyer" id="envoyer" value="S'inscrire"/>
    </form>

    <?php if (isset($message)) : ?>
        <?= $message ?><p></p>
    <?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
