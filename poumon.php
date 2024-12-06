<?php

$bdd = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
$coeur_humain = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='poumon' AND types_article='Corp humain'");
$coeur_ocean = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='poumon' AND types_article='ocean'");

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
            background: linear-gradient(to bottom, #ff0b69, #ff5959); /* Dégradé rose / rouge très flashy */
            font-family: 'Roboto', sans-serif;
            color: #fff;
            animation: fadeIn 2s ease-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h1 {
            color: #FFEB3B; /* Flashy jaune */
            font-size: 4rem;
            transition: color 0.5s ease, transform 0.3s ease;
            animation: spinning 2s infinite linear;
        }

        h1:hover {
            color: #FF5722;
            transform: rotate(360deg);
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 3px solid #FF69B4; /* Border très flashy en rose */
            border-radius: 20px;
            transition: transform 0.5s ease, box-shadow 0.5s ease, background-color 0.5s ease;
        }

        .border:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: rotate(5deg) scale(1.2);
            box-shadow: 0 0 30px 5px rgba(255, 0, 255, 0.8);
            border-color: #00FFFF; /* Bordure cyan au survol */
        }

        h4 {
            color: #FFEB3B;
            text-decoration: underline;
            font-size: 2rem;
            transition: transform 0.5s ease;
        }

        h4:hover {
            color: #FF5722;
            transform: scale(1.2);
            animation: shake 0.5s ease-out;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.8;
            animation: trollText 2s infinite alternate;
        }

        .crazy-text {
            animation: crazyColorChange 1s infinite alternate;
        }

        @keyframes shake {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(10deg); }
            100% { transform: rotate(0deg); }
        }

        @keyframes spinning {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes trollText {
            0% { color: #FFEB3B; }
            50% { color: #00FFFF; }
            100% { color: #FF69B4; }
        }

        @keyframes crazyColorChange {
            0% { color: #FFEB3B; }
            25% { color: #FF5722; }
            50% { color: #00FF00; }
            75% { color: #4CAF50; }
            100% { color: #00E5FF; }
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        .blink {
            animation: blink 0.5s infinite;
        }

        .dance {
            animation: danceAnimation 1.5s infinite alternate;
        }

        @keyframes danceAnimation {
            0% { transform: translateY(0px); }
            25% { transform: translateY(-20px); }
            50% { transform: translateY(20px); }
            75% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        #logo {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-image: url('https://i.goopics.net/abh155.jpg'); /* Image du logo */
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #logo:hover {
            transform: scale(1.1); /* Agrandit légèrement le logo au survol */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>

<div class="container mt-5 p-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
    <div class="text-center mb-4">
        <div class="border p-3" id="title1">
            <h1 class="crazy-text">Les Poumons</h1>
        </div>
        <div class="border p-4 mt-4">
            <p id="trollText" class="blink">
                Les poumons humains sont essentiels à la respiration. Ils permettent l'échange de gaz, en apportant de l'oxygène dans le sang et en expulsant le dioxyde de carbone. À l'instar des poumons, l'air et l'oxygène sont indispensables à la vie, tout comme l'océan, véritable poumon de la planète, régule la concentration de CO2 dans l'atmosphère et génère une grande partie de l'oxygène que nous respirons.
                <br><br>
                Les créatures marines, comme les baleines et les dauphins, utilisent leurs poumons pour respirer l'oxygène présent dans l'eau. Leurs poumons sont adaptés aux plongées profondes et aux longues périodes sous l'eau. De même, la santé de nos propres poumons est vitale pour maintenir notre bien-être, tout comme la santé de l'océan est cruciale pour l'équilibre écologique de la Terre.
                <br><br>
                Le lien entre les poumons humains et l'océan est donc profond. Tout comme les poumons régulent l'air que nous respirons, l'océan régule l'air de notre planète. La préservation de l'un et de l'autre est essentielle pour maintenir un environnement sain et équilibré.
            </p>
        </div>
    </div>
    
    <a href="http://localhost/Nuit2info2024/#leftButton">
        <div id="logo"></div>
    </a>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3" id="corpHumain">
                    <h4 class="dance">Le Corps Humain</h4>
                </div>
                <?php
                foreach ($coeur_humain as $c_humain) {

                    ?>
                    <div class="border p-3 mb-3">
                        <p><?=$c_humain["description_article"]?> <br>
                            <a href="<?=$c_humain["url_article"]?>" target="_blank"><?=$c_humain["titre_article"]?></a></p>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="col">
                <div class="border p-3" id="ocean">
                    <h4 class="dance">L'Océan</h4>
                </div>
                <?php
                foreach ($coeur_ocean as $c_ocean) {
                    ?>
                    <div class="border p-3 mb-3">
                        <p><?=$c_ocean["description_article"]?> <br>
                            <a href="<?=$c_ocean["url_article"]?>" target="_blank"><?=$c_ocean["titre_article"]?></a></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    // Fonction pour secouer un élément à chaque clic
    function shakeElement(element) {
        element.style.animation = 'shake 0.5s ease-out';
        setTimeout(() => {
            element.style.animation = ''; // Réinitialiser l'animation
        }, 500);
    }

    // Fonction pour faire tourner un titre avec une danse random
    function danceTitle(titleId) {
        let title = document.getElementById(titleId);
        title.addEventListener('click', () => {
            title.style.animation = 'danceAnimation 1s infinite alternate';
            playTrollSound();
        });
    }

    // Ajouter un son troll après un clic sur les titres
    function playTrollSound() {
        let audio = new Audio('https://www.soundjay.com/button/beep-07.wav'); // Son troll
        audio.play();
    }

    // Écouteurs d'événements
    danceTitle('title1');
    danceTitle('corpHumain');
    danceTitle('ocean');
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
