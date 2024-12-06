
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Foie</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
body {
    background: linear-gradient(to bottom, #6E2C00, #8B4513); /* Fond marron dégradé */
            font-family: 'Roboto', sans-serif;
            color: #fff;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
    0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h1 {
    color: #D7CCC8; /* Couleur claire pour les titres */
    font-size: 3rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h1:hover {
    color: #FFEBEE;
    transform: scale(1.1);
}

        .border {
    background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #3E2723; /* Bordure marron foncé */
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .border:hover {
    background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            border-color: #D7CCC8; /* Bordure plus claire au survol */
        }

        .row .col {
    margin-top: 20px;
        }

        .row .col .border:first-child {
    margin-bottom: 15px;
        }

        h4 {
    color: #D7CCC8; /* Couleur claire pour les titres */
    text-decoration: underline;
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        h4:hover {
    color: #FFEBEE;
    transform: scale(1.05);
}

        p {
    color: #D7CCC8; /* Couleur claire pour les paragraphes */
    font-size: 1rem;
            line-height: 1.6;
        }

        a {
    color: #D7CCC8;
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
            <h1>Le Foie</h1>
        </div>
        <div class="border p-4 mt-4">
            <p>
Le foie humain est un organe vital qui joue un rôle essentiel dans de nombreux processus corporels. Il est responsable de la détoxification du sang, de la production de bile pour la digestion des graisses, et de la régulation de diverses fonctions métaboliques. Tout comme le cœur, il est indispensable au maintien de l'équilibre de notre organisme. Le foie filtre les toxines, stocke les vitamines et les nutriments, et participe à la régulation du métabolisme.
                <br><br>
                À l'image de cet organe vital, le foie de nombreuses créatures marines est également essentiel à leur survie. Par exemple, le foie des poissons leur permet de stocker des graisses et des nutriments pour survivre dans des environnements marins souvent rigoureux. Les créatures marines comme les poissons et les mammifères marins dépendent d'un foie fonctionnel pour maintenir leur santé et leur énergie.
                <br><br>
                Tout comme il est crucial de prendre soin de notre propre foie, il est tout aussi important de préserver les océans, où la vie marine dépend de cet organe essentiel à la survie. Préserver l'environnement marin, c'est assurer la santé de la faune et de la flore qui en dépendent.
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
                    <p>Explorez les merveilles du foie humain et son fonctionnement complexe. <br>
                        <a href="https://fr.wikipedia.org/wiki/Foie" target="_blank">En savoir plus</a></p>
                </div>
            </div>
            <div class="col">
                <div class="border p-3">
                    <h4>L'Océan</h4>
                </div>
                <div class="border p-3">
                    <p>Découvrez la beauté et les mystères de l'océan, source de vie sur notre planète. <br>
                        <a href="https://fr.wikipedia.org/wiki/Oc%C3%A9an" target="_blank">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>