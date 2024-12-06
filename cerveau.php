<?php
$bdd = new PDO('mysql:host=darkskill.seblemoine.fr;dbname=bdd_darkskill', 'bdd_darkskill', 'NTXxYV!3svia');
$coeur_humain = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='cerveau' AND types_article='Corp humain'");
$coeur_ocean = $bdd->query("SELECT * FROM vue_articles WHERE categorie_article='cerveau' AND types_article='ocean'");

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

        /* Logo rond en bas à droite avec image */
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
                <br><br>
                L'homme et l'océan sont profondément liés. Notre cerveau, tout comme l'océan, est un écosystème complexe où chaque élément interagit et influe sur les autres. Les découvertes scientifiques récentes ont montré que la santé de nos océans a un impact direct sur notre bien-être mental et physique, tout comme un environnement sain est essentiel pour un cerveau équilibré.
                <br><br>
                Dans cette perspective de respect de la nature et de préservation de l'environnement, le catamaran X70 se présente comme une innovation majeure. Ce bateau, qui fait partie des technologies maritimes de demain, est conçu pour produire zéro émission de CO2. En naviguant avec une propulsion hybride et une conception optimisée, il permet de réduire l'impact environnemental tout en offrant une expérience de navigation luxueuse et écologique. L'esprit humain et l'océan se rejoignent à travers des innovations comme celle-ci, prouvant que l'on peut allier progrès technologique et respect de notre planète.
                <br><br>
                <a><img src="https://i.goopics.net/raufmh.jpg" alt="Image"></a>
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3">
                    <h4>Humain</h4>
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
                <div class="border p-3">
                    <h4>L'Océan</h4>
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


<a href="http://localhost/MIAVOUDILA%20Ivann/NuitDeINFO/Nuit2Info2024/">
    <div id="logo"></div>
</a>

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

        // Fonction pour faire apparaître un pop-up avec un message personnalisé
        function showPopup() {
        const messages = [
        "Tu t'amuses bien ? 😜",
        "Pourquoi t'es là ?",
        "Oops, une erreur s'est produite (ou pas).",
        "Reviens ici, c'est important !",
        "Tu cherches quelque chose ? 🧐"
        ];
        const randomMessage = messages[Math.floor(Math.random() * messages.length)];
        alert(randomMessage); // Affiche le pop-up avec un message aléatoire
    }

        // Sélectionner tous les liens contenant le texte "Test"
        document.querySelectorAll('a').forEach((link) => {
        // Vérifier si le lien contient le texte "Test"
        if (link.textContent.includes('Test')) {
        // Ajouter un événement 'mouseenter' pour afficher le pop-up
        link.addEventListener('mouseenter', showPopup);
    }
    });


// Fonction pour déplacer un élément à une position aléatoire
    function moveElementRandomly(element) {
        const maxX = window.innerWidth - element.offsetWidth;
        const maxY = window.innerHeight - element.offsetHeight;
        const randomX = Math.floor(Math.random() * maxX);
        const randomY = Math.floor(Math.random() * maxY);

        element.style.left = randomX + "px";
        element.style.top = randomY + "px";
    }

    // Fonction pour jouer un son troll
    function playSound() {
        const audio = new Audio("https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"); // Remplace par un fichier valide
        audio.play().catch((error) => {
            console.error("Erreur lors de la lecture du son : ", error);
        });
    }

    // Ajoute des événements sur les liens avec la classe 'whirl-link'
    document.querySelectorAll('.whirl-link').forEach((link) => {
        link.addEventListener("mouseenter", () => {
            moveElementRandomly(link);
            showPopup();
        });

        link.addEventListener("click", () => {
            playSound();
        });
    });

    // Ajouter des éléments étranges toutes les 5 secondes
    setInterval(() => {
        const newDiv = document.createElement("div");
        newDiv.textContent = "Qu'est-ce que tu fais là ?";
        newDiv.style.position = "absolute";
        newDiv.style.left = Math.random() * window.innerWidth + "px";
        newDiv.style.top = Math.random() * window.innerHeight + "px";
        newDiv.style.fontSize = "20px";
        newDiv.style.color = "red";
        newDiv.style.transform = "rotate(" + Math.random() * 360 + "deg)";
        document.body.appendChild(newDiv);
    }, 2000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>