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
    <title>Le Coeur</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom, #8B0000, #D32F2F);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }

        h1 {
            color: #FFCDD2;
        }

        .border {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #B71C1C;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .border:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #FFCDD2;
        }

        .row .col {
            margin-top: 20px;
        }

        .row .col .border:first-child {
            margin-bottom: 15px;
        }

        h4 {
            color: #FFEBEE;
            text-decoration: underline; /* Soulignement des titres */
        }

        p {
            color: #FFCDD2;
        }

        a {
            color: #FFCDD2;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #FFEBEE;
            text-decoration: underline;
        }

        @keyframes spinAround {
            0% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(360deg) scale(1.1);
            }
            100% {
                transform: rotate(0deg);
            }
        }

    </style>
</head>
<body>

<div class="container mt-5 p-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
    <div class="text-center mb-4">
        <div class="border p-3">
            <h1>Le Coeur</h1>
        </div>
        <div class="border p-4 mt-4">
            <p>
                Le cœur humain, moteur central de la vie, pulse sans relâche pour alimenter notre corps en oxygène et en nutriments essentiels. À l'image de ce cœur vital, l'océan, véritable « cœur bleu » de notre planète, joue un rôle tout aussi crucial. Tout comme le sang irrigue chaque organe, les courants marins parcourent l'ensemble des océans, transportant chaleur, oxygène et nutriments indispensables à la survie de la faune marine.
                <br><br>
                Les créatures qui peuplent les profondeurs, des majestueuses baleines aux minuscules planctons, dépendent de cette circulation vitale, semblable à notre système sanguin. Les cœurs des animaux marins, adaptés à des environnements souvent extrêmes, sont des merveilles d'efficacité. Par exemple, le cœur d'une baleine bleue peut battre lentement lors de ses plongées en profondeur, économisant ainsi son énergie, tandis que celui d'un poisson, adapté aux variations de température et de pression, régule constamment sa vitesse pour s'ajuster à son environnement.
                <br><br>
                Ainsi, le lien entre le cœur humain et le cœur de l'océan n'est pas seulement symbolique. Les deux rappellent l'importance de la circulation vitale, de l'équilibre et de l'harmonie. Prendre soin de notre cœur revient aussi à protéger l'océan, ce cœur battant de la Terre, source de vie et de régénération pour l'ensemble des écosystèmes, y compris le nôtre.
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <div class="row">
            <div class="col">
                <div class="border p-3">
                    <h4>Le Corps Humain</h4>
                </div>
                <div class="border p-3 mb-3">
                    <p>Explorez les merveilles du coeur du corps humain et son fonctionnement complexe. <br>
                        <a href="https://www.kenhub.com/fr/library/anatomie/coeur" target="_blank">En savoir plus</a></p>
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
                <div class="border p-3 mb-3">
                    <p>Découvrez la beauté et les mystères de l'océan, source de vie sur notre planète. <br>
                        <a href="https://www.aquariumdeparis.com/wp-content/uploads/2019/10/brochure-ateliers-pedagogiques-2019-2020-aquarium-de-paris.pdf" target="_blank">En savoir plus</a></p>
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
    // Fait "vibrer" un élément au survol
    document.querySelectorAll('.border').forEach(element => {
        element.addEventListener('mouseover', () => {
            element.style.transform = 'rotate(' + (Math.random() * 10 - 5) + 'deg)';
        });
        element.addEventListener('mouseout', () => {
            element.style.transform = 'rotate(0)';
        });
    });

    // Messages humoristiques au clic sur le titre
    document.querySelector('h1').addEventListener('click', () => {
        const messages = [
            "Oh, tu as cliqué sur le titre ? Curieux...",
            "C'est interdit de cliquer ici, mais bon, bravo.",
            "Le cœur te remercie pour cet acte de curiosité.",
            "Un jour, ce clic sauvera le monde, mais pas aujourd'hui.",
            "Tu viens de réveiller l'Ancien Cœur... oops ?"
        ];
        alert(messages[Math.floor(Math.random() * messages.length)]);
    });

    document.querySelector('h4').addEventListener('click', () => {
        const messages = [
            "T'es chaud de jouer un jeu?",
            "Essaye seulement de spam clique sur la grosse case au dessus tu verras bien.",
            "T'es nul, tu fais que de cliquer",
            "ça danse bien ici?",
            "Fais danser les textes en bas en cliquant 5 fois sur la grosse case tu verras si t'as pas peur."
        ];
        alert(messages[Math.floor(Math.random() * messages.length)]);
    });

    // Changement aléatoire de la couleur du fond au clic sur le corps
    document.body.addEventListener('click', () => {
        const randomColor = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
        document.body.style.background = `linear-gradient(to bottom, ${randomColor}, #D32F2F)`;
    });

    // Ajout d'un mini-jeu caché (cliquez 5 fois sur un mot pour faire danser les colonnes)
    let clickCount = 0;
    document.body.addEventListener('click', (e) => {
        if (e.target.tagName === 'A' || e.target.tagName === 'P') {
            clickCount++;
            if (clickCount === 5) {
                document.querySelectorAll('.col').forEach((col) => {
                    col.style.animation = 'spinAround 2s ease-in-out';
                });
                setTimeout(() => {
                    document.querySelectorAll('.col').forEach(col => col.style.animation = '');
                }, 2000); // Durée du tourbillon
                clickCount = 0; // Réinitialiser
            }
        }
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
