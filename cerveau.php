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
    <title>Le Cerveau</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #1A237E, #3949AB);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }

        h1 {
            color: #C5CAE9;
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #303F9F;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .border:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #C5CAE9;
        }

        .row .col {
            margin-top: 20px;
        }

        .row .col .border:first-child {
            margin-bottom: 15px;
        }

        h4 {
            color: #E8EAF6;
            text-decoration: underline;
        }

        p {
            color: #C5CAE9;
        }

        a {
            color: #C5CAE9;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #E8EAF6;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container mt-5 p-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
    <div class="text-center mb-4">
        <div class="border p-3">
            <h1>Le Cerveau et l'Océan</h1>
        </div>
        <div class="border p-4 mt-4">
            <p>
                Le cerveau humain, centre du contrôle et siège de notre conscience, est une merveille d'ingénierie biologique. Ses milliards de neurones communiquent sans cesse, orchestrant pensées, émotions et actions.
                <br><br>
                Tout comme une ville complexe où chaque bâtiment a sa fonction, le cerveau est organisé en zones spécifiques : le cortex frontal pour la prise de décision, l'hippocampe pour la mémoire, ou encore le cervelet pour la coordination. Chaque région, bien que spécialisée, travaille de concert pour maintenir l'équilibre et la performance du corps et de l'esprit.
                <br><br>
                Les connexions neuronales, comparables à des réseaux de communication avancés, se renforcent ou s'affaiblissent selon nos expériences, illustrant la plasticité cérébrale. Tout comme nous protégeons nos systèmes vitaux, prendre soin de notre cerveau – par une alimentation équilibrée, un bon sommeil et une stimulation cognitive – est essentiel pour vivre pleinement et en harmonie.
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3">
                    <h4>Humain</h4>
                </div>
                <div class="border p-3">
                    <p>Découvrez les mystères et le fonctionnement fascinant du cerveau humain, siège de notre pensée et de nos émotions. <br>
                        <a href="https://www.mnhn.fr/fr/tout-savoir-sur-le-cerveau" target="_blank">En savoir plus</a></p>
                </div>
            </div>
            <div class="col">
                <div class="border p-3">
                    <h4>L'Océan</h4>
                </div>
                <div class="border p-3">
                    <p>Explorez les profondeurs de l'océan, ce vaste système complexe qui influence la vie sur Terre. <br>
                        <a href="https://fne.asso.fr/dossiers/10-conseils-pour-agir-et-preserver-l-ocean-au-quotidien" target="_blank">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
