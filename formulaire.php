<?php

session_start();
try {
    // Création de la connexion PDO
    $conn = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
    // Définit le mode d'erreur pour PDO à Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, on affiche l'erreur
    die("Erreur de connexion : " . $e->getMessage());
}

// Variables pour le message d'erreur ou de succès
$message = '';

// Vérifier si l'utilisateur est connecté (par exemple avec un identifiant de session)
if (!isset($_SESSION['id_user'])) {
    $message = "Vous devez être connecté pour ajouter un article.";
} else {
    $ref_user = $_SESSION['id_user']; // Récupérer l'ID de l'utilisateur connecté

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sécuriser les données envoyées par le formulaire
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $types = htmlspecialchars($_POST['types']);
        $categorie = htmlspecialchars($_POST['categorie']);
        $url = htmlspecialchars($_POST['url']);
        $statut = 'refuse';

        $sql = "INSERT INTO article (titre, description, types, statut, categorie, url, ref_user)
                VALUES (:titre, :description, :types, :statut, :categorie, :url, :ref_user)";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':types', $types);
            $stmt->bindParam(':statut', $statut);
            $stmt->bindParam(':categorie', $categorie);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':ref_user', $ref_user, PDO::PARAM_INT);

            // Exécuter la requête
            $stmt->execute();

            $message = "L'article a été ajouté avec succès !";
        } catch (PDOException $e) {
            $message = "Erreur : " . $e->getMessage();
        }
    }
}

// Fermer la connexion PDO
$conn = null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .radio-group {
            margin-bottom: 15px;
            display: flex;
            gap: 20px;
        }
        .radio-group input {
            margin-right: 5px;
        }
    </style>
</head>
<body>
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
</li>
<h1>Ajouter un article</h1>

<?php if ($message): ?>
    <div class="message <?= strpos($message, 'Erreur') === false ? 'success' : 'error' ?>">
        <?= $message ?>
    </div>
<?php endif; ?>

<form action="formulaire.php" method="POST">
    <label for="titre">Titre de l'article :</label>
    <input type="text" id="titre" name="titre" required><br>

    <label for="description">Description :</label>
    <textarea id="description" name="description" rows="4" required></textarea><br>

    <label>Type :</label>
    <div class="radio-group">
        <div>
            <input type="radio" id="corp_humain" name="types" value="Corp humain" required>
            <label for="corp_humain">Corp humain</label>
        </div>
        <div>
            <input type="radio" id="ocean" name="types" value="Ocean">
            <label for="ocean">Océan</label>
        </div>
    </div>

    <label for="categorie">Catégorie :</label>
    <select id="categorie" name="categorie" required>
        <option value="cerveau">Cerveau</option>
        <option value="Coeur">Coeur</option>
        <option value="Intestin">Intestin</option>
        <option value="Poumon">Poumon</option>
    </select><br>

    <label for="url">URL de l'article :</label>
    <input type="url" id="url" name="url" required><br>

    <input type="submit" value="Créer l'article">
</form>

</body>
</html>
