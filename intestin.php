<?php




$bdd = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
$coeur_humain = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='coeur' AND types_article='Corp humain'");
$coeur_ocean = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='coeur' AND types_article='ocean'");

$coeur_humain = $coeur_humain->fetchAll();
$coeur_ocean = $coeur_ocean->fetchAll();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les Intestins</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #8D6E63, #C2A68F); /* Couleurs naturelles */
            font-family: 'Roboto', sans-serif;
            color: #fff;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h1 {
            color: #FFFFFF; /* Titre en blanc */
            font-size: 3rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h1:hover {
            color: #FFF9C4;
            transform: scale(1.1);
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #6D4C41; /* Ton plus sombre de marron */
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .border:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #FFF9C4;
        }

        .row .col {
            margin-top: 20px;
        }

        .row .col .border:first-child {
            margin-bottom: 15px;
        }

        h4 {
            color: #FFF9C4;
            text-decoration: underline;
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h4:hover {
            color: #A1887F;
            transform: scale(1.05);
        }

        p {
            color: #FFF9C4;
            font-size: 1rem;
            line-height: 1.6;
        }

        a {
            color: #FFF9C4;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #FFEBEE;
            text-decoration: underline;
        }

        .container {
            animation: slideIn 0.8s ease-in-out;
        }

        @keyframes slideIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .text-center {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

<div class="container mt-5 p-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
    <div class="text-center mb-4">
        <div class="border p-3">
            <h1>Les Intestins</h1> <!-- Titre en blanc -->
        </div>
        <div class="border p-4 mt-4">
            <p>
                Les intestins humains, essentiels à notre santé, régulent la digestion et l'absorption des nutriments, tout en maintenant notre équilibre interne. Cependant, la pollution, tout comme une mauvaise alimentation, peut perturber ce système. De même, l’océan, berceau de milliers d’espèces, souffre de la pollution, affectant la faune marine. Les animaux marins, ingérant des plastiques et autres toxines, voient leur système digestif altéré, tout comme nos intestins sont sensibles aux substances nuisibles.
                <br><br>
                Les intestins et l’océan partagent une vulnérabilité commune : un déséquilibre dans l’un affecte l’autre. Pour préserver notre santé et celle des océans, nous devons réduire la pollution et protéger ces deux écosystèmes vitaux. La préservation de notre flore intestinale et de l’environnement marin va de pair, car tout ce qui nuit à l’un a des conséquences pour l’autre.
                <br><br>
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3">
                    <h4>Le Corps Humain </h4>
                </div>
                <div class="border p-3">
                    <p>Découvrez le rôle essentiel des intestins dans notre santé et leur impact sur notre bien-être.<br>
                        <a href="https://www.hirslanden.ch/fr/corporate/campagne/intestin-organe-fascinant.html" target="_blank">En savoir plus</a></p>
                </div>
            </div>
            <div class="col">
                <div class="border p-3">
                    <h4>La Pollution Océanique</h4>
                </div>
                <div class="border p-3">
                    <p>
                        Explorez l'impact de la pollution océanique sur la faune marine et découvrez comment elle perturbe l'équilibre de nos écosystèmes. <br>
                        <a href="https://www.imo.org/fr/MediaCentre/HotTopics/Pages/marinelitter-default.aspx" target="_blank">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>