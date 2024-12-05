<?php
session_start();
if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['role'] !== 'administrateur') {
    header('Location: Connexion.php');
    exit();
}

function get_articles() {
    try {
        // Connexion à la base de données
        $bdd = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour récupérer les données de la vue
        $req = $bdd->prepare("SELECT * FROM vue_articles");
        $req->execute();

        // Retourne les résultats sous forme de tableau associatif
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}

// Appel de la fonction pour récupérer les articles
$articles = get_articles();
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 style="text-transform: uppercase; text-align: center;">Administration</h1>

<div class="container mt-5">
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Date de publication</th>
            <th>Nom complet</th>
            <th>Titre</th>
            <th>Description</th>
            <th>URL</th>
            <th>Types</th>
            <th>Statut</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['date_publication']) ?></td>
                <td><?= htmlspecialchars($article['nom_complet']) ?></td>
                <td><?= htmlspecialchars($article['titre_article']) ?></td>
                <td><?= htmlspecialchars($article['description_article']) ?></td>
                <td><a href="<?= htmlspecialchars($article['url_article']) ?>" target="_blank"><?= htmlspecialchars($article['url_article']) ?></a></td>
                <td><?= htmlspecialchars($article['types_article']) ?></td>
                <td><?= htmlspecialchars($article['statut_article']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
