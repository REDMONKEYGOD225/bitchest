<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        .section {
            font-family: "Célias", sans-serif;
            color: #FFFFFF;
        }

        .section1 {
            position: relative;
            /* Positionnement relatif pour la superposition */
            background-image: url('images/Fond-alpinisme.webp');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFFFF;
            text-align: center;
        }

        .section1::before {
            content: '';
            /* Contenu du pseudo-élément */
            position: absolute;
            /* Positionnement absolu */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(56, 97, 140, 0.5);
            /* Couleur du filtre */
            opacity: 0.1;
            /* Opacité du filtre */
            z-index: 1;
            /* Assure que le filtre est en arrière-plan */
        }

        .content {
            position: relative;
            /* Positionnement relatif pour placer le texte au-dessus du filtre */
            z-index: 2;
            /* Assure que le texte est en premier plan */
            max-width: 800px;
        }

        .title {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 1.5em;
        }


        .section2 {
            background-color: #FFFFFF;
            /* Fond blanc */
            color: #38618C;
            padding: 100px 20px;
            text-align: center;
        }

        .section2 h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .section2 p {
            font-size: 1.2em;
        }

        .section2 img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        .section3 {
            background-color: #35A7FF;
            color: #FFFFFF;
            padding: 100px 20px;
            text-align: center;
        }

        .section3 h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .card {
            width: 200px;
            /* Ajustez la largeur selon vos besoins */
            background-color: #FFFFFF;
            /* Couleur de fond des cartes */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Ombre légère */
        }

        .card img {
            width: 100%;
            /* Pour s'assurer que l'image s'adapte correctement */
            border-radius: 5px;
        }

        .card p {
            color: #38618C;
            /* Couleur de texte des cartes */
            font-family: "Célias", sans-serif;
            /* Nouvelle typographie */
        }

        .carousel {
            overflow: hidden;
            width: 100%;
            height: 300px;
            /* Ajustez la hauteur selon vos besoins */
            position: relative;
            background-color: #FFFFFF;
            color: #FFFFFF;
            /* Nouvelle couleur de texte */
            font-family: "Célias", sans-serif;
            /* Nouvelle typographie */
        }

        .carousel .slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel .slide {
            flex: 0 0 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            background-color: #38618C;
            /* Couleur bleu foncé pour les slides */
            color: #FFFFFF;
        }
        .carousel h2 {
    color: #38618C; /* Texte en bleu foncé */
}

    </style>
</head>

<body>
    @include('layouts.header')

    <section class="section">
        <div class="section1">
            <div class="content">
                <h1 class="title">Explorez d'abord, puis agissez</h1>
                <p class="subtitle">Les décisions de trading les plus avisées sont celles qui sont précédées d'une analyse approfondie et suivies d'une action délibérée.</p>
            </div>
        </div>

        <div class="section2">
            <h1>Explorez de nouveaux horizons dans le monde des marchés financiers</h1>
            <p>Rejoignez une communauté de 50 millions de traders et investisseurs qui tracent leur propre chemin <br>
                vers l'avenir.</p>
            <img src="images/1-trading-what-is-it.png" alt="">
        </div>

        <div class="section3">
            <h1>Bitchest <br> La nouvelle ère du trading</h1>
            <div class="card-container">


                <div class="card">
                    <img src="images/Technologie de pointe.jpeg" alt="Description de l'image">
                    <p>Bitchest utilise une technologie de pointe, y compris des algorithmes de trading avancés et des outils d'analyse de données puissants, pour offrir une expérience de trading moderne et efficace.</p>
                </div>

                <div class="card">
                    <img src="images/Accessibilité et facilité d'utilisation.jpeg" alt="Description de l'image">
                    <p> La plateforme Bitchest est conçue pour être accessible aux traders de tous niveaux d'expérience, offrant une interface conviviale et intuitive ainsi que des fonctionnalités simples à utiliser.</p>
                </div>

                <div class="card">
                    <img src="images/Transparence et sécurité.jpeg" alt="Description de l'image">
                    <p>Bitchest met l'accent sur la transparence et la sécurité, en fournissant des informations claires sur les transactions et en mettant en œuvre des mesures de sécurité robustes pour protéger les fonds et les données des utilisateurs.</p>
                </div>

                <div class="card">
                    <img src="images/Innovation continue.jpeg" alt="Description de l'image">
                    <p>Bitchest est constamment à la recherche de nouvelles opportunités et de nouvelles technologies pour améliorer son offre de trading, ce qui en fait une plateforme à la pointe de l'innovation dans le domaine du trading en ligne.</p>
                </div>

            </div>
        </div>

        <div class="carousel">
            <h2 style="text-align: center;">Les avis de quelques-uns de nos utilisateurs</h2>
            <div class="slides">
                <div class="slide">Slide 1</div>
                <div class="slide">Slide 2</div>
                <div class="slide">Slide 3</div>
                <div class="slide">Slide 4</div>
                <div class="slide">Slide 5</div>
            </div>
        </div>
    </section>

    <script>
        const slides = document.querySelector('.slides');
        const slideWidth = document.querySelector('.slide').clientWidth;
        let currentIndex = 0;

        function nextSlide() {
            currentIndex++;
            if (currentIndex === 5) {
                currentIndex = 0;
            }
            slides.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
        }

        setInterval(nextSlide, 3000); // Change de slide toutes les 3 secondes (3000 millisecondes)
    </script>

    @include('layouts.footer')
</body>

</html>