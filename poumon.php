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
    <title>Les Poumons</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #6A1B9A, #9C27B0); /* Fond violet dégradé */
            font-family: 'Roboto', sans-serif;
            color: #fff;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h1 {
            color: #F3E5F5; /* Couleur claire pour les titres */
            font-size: 3rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h1:hover {
            color: #E1BEE7;
            transform: scale(1.1);
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #4A148C; /* Bordure violet foncé */
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .border:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #F3E5F5; /* Bordure plus claire au survol */
        }

        .row .col {
            margin-top: 20px;
        }

        .row .col .border:first-child {
            margin-bottom: 15px;
        }

        h4 {
            color: #F3E5F5; /* Couleur claire pour les titres */
            text-decoration: underline;
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h4:hover {
            color: #E1BEE7;
            transform: scale(1.05);
        }

        p {
            color: #F3E5F5; /* Couleur claire pour les paragraphes */
            font-size: 1rem;
            line-height: 1.6;
        }

        a {
            color: #F3E5F5;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #E1BEE7;
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
            <h1>Les Poumons</h1>
        </div>
        <div class="border p-4 mt-4">
            <p>
                Les poumons humains sont essentiels à la respiration. Ils permettent l'échange de gaz, en apportant de l'oxygène dans le sang et en expulsant le dioxyde de carbone. À l'instar des poumons, l'air et l'oxygène sont indispensables à la vie, tout comme l'océan, véritable poumon de la planète, régule la concentration de CO2 dans l'atmosphère et génère une grande partie de l'oxygène que nous respirons.
                <br><br>
                Les créatures marines, comme les baleines et les dauphins, utilisent leurs poumons pour respirer l'oxygène présent dans l'eau. Leurs poumons sont adaptés aux plongées profondes et aux longues périodes sous l'eau. De même, la santé de nos propres poumons est vitale pour maintenir notre bien-être, tout comme la santé de l'océan est cruciale pour l'équilibre écologique de la Terre.
                <br><br>
                Le lien entre les poumons humains et l'océan est donc profond. Tout comme les poumons régulent l'air que nous respirons, l'océan régule l'air de notre planète. La préservation de l'un et de l'autre est essentielle pour maintenir un environnement sain et équilibré.
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3">
                    <h4>Le Corps Humain</h4>
                </div>
                <div class="border p-3">
                    <p>Découvrez le rôle essentiel des poumons dans le corps humain. <br>
                        <a href="https://www.therespiratorysystem.com/fr/lungs/?utm_content=cmp-true" target="_blank">En savoir plus</a></p>
                </div>
            </div>
            <div class="col">
                <div class="border p-3">
                    <h4>L'Océan</h4>
                </div>
                <div class="border p-3">
                    <p>Explorez l'importance de l'océan, poumon bleu de la planète. <br>
                        <a href="https://www.nationalgeographic.fr/perpetual-planet/2018/02/les-oceans-plus-grand-habitat-naturel-de-notre-planete" target="_blank">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
