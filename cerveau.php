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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #000428, #004e92);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }

        h1, h4, p, a {
            transition: all 0.3s ease;
        }

        h1 {
            color: white;
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #303F9F;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .border:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.5);
        }

        /* Rainbow effect only on hover */
        .border:hover {
            animation: rainbow-border 2s linear infinite;
            border-color: transparent;
            background: linear-gradient(135deg, red, orange, yellow, green, cyan, blue, violet);
            background-size: 200% 200%;
        }

        @keyframes rainbow-border {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Text color changes for contrast */
        .border:hover h4, .border:hover p, .border:hover a {
            color: black;
        }

        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            transform: scale(1.1);
        }

        /* Whirl animation on click */
        @keyframes whirl {
            0% {
                clip-path: circle(0% at 50% 50%);
                transform: rotate(0deg);
            }
            100% {
                clip-path: circle(150% at 50% 50%);
                transform: rotate(720deg);
            }
        }

        .whirl-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: radial-gradient(circle, #000428, #004e92);
            z-index: 9999;
            animation: whirl 1.5s ease-in-out forwards;
            transform-origin: center;
        }
    </style>
</head>
<body>

<div class="container mt-5 p-4 rounded">
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
                        <a href="https://www.mnhn.fr/fr/tout-savoir-sur-le-cerveau" class="whirl-link">En savoir plus</a></p>
                </div>
            </div>
            <div class="col">
                <div class="border p-3">
                    <h4>L'Océan</h4>
                </div>
                <div class="border p-3">
                    <p>Explorez les profondeurs de l'océan, ce vaste système complexe qui influence la vie sur Terre. <br>
                        <a href="https://fne.asso.fr/dossiers/10-conseils-pour-agir-et-preserver-l-ocean-au-quotidien" class="whirl-link">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.whirl-link').forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            // Création d'une surcouche d'effet "siphon"
            const whirlOverlay = document.createElement('div');
            whirlOverlay.classList.add('whirl-overlay');
            document.body.appendChild(whirlOverlay);

            // Délai pour rediriger après l'animation
            setTimeout(() => {
                window.location.href = link.href;
            }, 1500);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
