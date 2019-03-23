<!DOCTYPE html>
<html lang="fr">
    <?php
    include(__DIR__."/_fragments/_head.php");
    ?>
    <body class="sipaui accueil">
        <header role="banner">
            <?php
            include(__DIR__."/_fragments/_identite.php");
            ?>

            <nav role="navigation">
                <?php
                include(__DIR__."/_fragments/_nav.php");
                ?>
            </nav>
        </header>


        <main class="su-article su-old-editorial" role="main">
            <article class="su-margin-bottom-xl presentation" role="article">
                <div class="su-container">
                    <div class="titre">
                    <div>
                        <svg viewBox="0 0 105 120" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;" class="logoSipaUi">
                            <style>.couleur-logoSipaUi{fill:#fff}</style>
                            <g id="XMLID_4_"><path id="XMLID_28_" d="M102.9,14.946l-13.2,-1.5l0,-4.8c0,-2.7 -3.9,-3.3 -5.4,-3.3c-5.7,-0.9 -14.7,-0.3 -20.4,0.9c-1.2,0.3 -3.9,0.9 -4.8,2.7l0,-3.9c0,-3 -4.2,-3.9 -7.8,-4.5c-7.5,-1.2 -17.7,-0.3 -22.2,1.5c-0.6,0.3 -2.7,1.2 -3,3l0,3c-5.1,-0.6 -10.8,-0.3 -13.5,0.9c-1.5,0.6 -2.1,1.5 -2.1,2.4l0,3.9l-9,3c-0.9,0.3 -1.5,1.2 -1.5,2.1l0,65.4c0,0.6 0.3,1.2 0.6,1.5l32.7,32.1l1.8,0l68.4,-21.9c0.9,-0.3 1.5,-1.2 1.5,-2.1l0,-78.3c0,-1.2 -0.9,-2.1 -2.1,-2.1Zm-19.2,-5.4c0.6,0 1.2,0.3 1.5,0.3l0,3l-15.9,-1.8l0,-1.2c4.8,-0.6 10.8,-0.9 14.4,-0.3Zm-32.7,-4.5c2.4,0.3 3.6,0.6 3.9,0.9l0,3.9l-17.4,-2.1l0,-3c4.2,-0.3 9.3,-0.3 13.5,0.3Zm49.5,88.5l-63.3,21l0,-102.3l63.3,6.9l0,74.4Z" class="couleur-logoSipaUi"/><path id="XMLID_1_" d="M83.1,27.546l0,21l-18.6,1.2l0,-3.6l16.5,-0.6l0,-19.2c-13.2,-6 -28.8,4.8 -33.6,25.2c-4.5,19.5 3.6,37.8 17.1,41.4l0,-22.8l18.6,-3l0,3.3l-16.2,2.7l0,20.4c13.2,1.8 25.5,-11.4 28.8,-28.2c3,-15.3 -2.1,-31.2 -12.6,-37.8Z" class="couleur-logoSipaUi"/></g>
                        </svg>
                    </div>
                    <div>
                        <h1>SipaUI</h1>
                        <span class="version"><?= $GLOBALS['sipaversion']; ?></span>
                    </div>
                </div>

                    <div class="su-row intro">
                        <div class="su-col-md-4">
                        <p class="baseline su-margin-bottom-xl">Un framework front-end moderne pour les sites du Groupe SIPA</p>
                        <p>Construisez vos sites <strong>SIPA</strong> ou vos blocs de contenu en responsif et «&nbsp;mobile-first&nbsp;», tout en l’adaptant au thème visuel de Ouest-France ou à celui de votre marque&nbsp;!</p>
                        <p>SipaUI est un framework HTML, CSS et JS agnostique&nbsp;: un fichier de variables SASS vous permet de thématiser l’apparence des composants visuels en fonction de vos besoins. Vous pourrez aussi utiliser/créer la version <strong>Vue.js</strong> d’un composant dans vos projets orientés <strong>application web</strong>.</p>
                    </div>
                        <div class="su-col-md-2">
                        <svg viewBox="0 0 422 565" class="illustration su-block-center su-margin-bottom-m" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
<g id="Navigateur_coupé"><path d="M57.374,271.6l317,0l0,201.2c-1.1,1.5 -2.2,3.1 -3.4,4.6c26,-33.9 41.4,-76.3 41.4,-122.4c0,-111.3 -90.2,-201.5 -201.5,-201.5c-111.3,0 -201.5,90.2 -201.5,201.5c0,49.8 18.1,95.4 48,130.5l0,-213.9Z" style="fill:#fff;fill-opacity:0.5;fill-rule:nonzero;"/><rect x="57.374" y="271.6" width="316" height="35.9" style="fill:#fff;fill-opacity:0.2;fill-rule:nonzero;"/><circle cx="75.174" cy="290" r="5" style="fill:#fff;fill-opacity:0.7;"/><circle cx="95.874" cy="290" r="5" style="fill:#fff;fill-opacity:0.4;"/><circle cx="116.574" cy="290" r="5" style="fill:#fff;fill-opacity:0.5;"/></g><path id="Certi_1_" d="M404.374,273.3c-10.6,-25 -25.7,-47.5 -45,-66.7c-7.4,-7.4 -15.2,-14.1 -23.5,-20.3l0,-101.3l80,0c2,0 3.8,-1.2 4.6,-3.1c0.8,-1.9 0.3,-4 -1.1,-5.4l-20,-20c-0.9,-0.9 -2.2,-1.5 -3.5,-1.5l-17.1,0l-64.7,-53.8c0,0 -0.1,-0.1 -0.2,-0.1c-0.1,-0.1 -0.3,-0.2 -0.4,-0.3c-0.1,-0.1 -0.2,-0.1 -0.3,-0.2c-0.2,-0.1 -0.3,-0.2 -0.5,-0.2c-0.1,0 -0.2,-0.1 -0.3,-0.1c-0.2,-0.1 -0.4,-0.1 -0.5,-0.1c-0.1,0 -0.2,0 -0.2,-0.1c-0.3,-0.1 -0.5,-0.1 -0.8,-0.1c-0.3,0 -0.5,0 -0.8,0.1l-0.2,0c-0.2,0 -0.4,0.1 -0.5,0.1l-164.3,54.8l-89.2,0c-0.8,0 -1.5,0.2 -2.2,0.5l-40,20c-2.1,1 -3.2,3.4 -2.6,5.6c0.5,2.3 2.5,3.9 4.9,3.9l192.5,0l0,60c-27.5,0.3 -54.1,5.8 -79.2,16.5c-25,10.6 -47.5,25.7 -66.7,45c-19.3,19.3 -34.4,41.7 -45,66.7c-11.1,26 -16.7,53.5 -16.7,81.8c0,28.3 5.6,55.8 16.5,81.7c10.6,25 25.7,47.5 45,66.7c19.3,19.3 41.7,34.4 66.7,45c25.9,11 53.4,16.5 81.7,16.5c28.3,0 55.8,-5.6 81.7,-16.5c25,-10.6 47.5,-25.7 66.7,-45c19.3,-19.3 34.4,-41.7 45,-66.7c11,-25.9 16.5,-53.4 16.5,-81.7c0,-28.3 -5.4,-55.8 -16.3,-81.7Zm-33.5,31.7l-137.9,0c-1.2,-0.6 -2.4,-1.1 -3.7,-1.6l0,1.6l-4.9,0l0,-3.3c-3.5,-1 -7.2,-1.6 -11,-1.8l0,-24.9l157.5,0l0,30Zm-162.5,-5.1c-7,0.3 -13.6,2.1 -19.6,5.1l-127.9,0l0,-30l147.5,0l0,24.9Zm-16.2,31l32.2,0l0,-20.9l4.9,0l0,25.8l-37.1,0l0,-4.9Zm21.2,-175.9c25.6,0.3 50.1,5.4 72.5,14.5l0,95.5l-72.5,0l0,-110Zm-133.8,-84.9l10.1,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.8,-9.9Zm2.8,9.9l-12.7,0l6.3,-6.3l6.4,6.3Zm-6.4,-13.4l-6.6,-6.6l13.2,0l-6.6,6.6Zm23.4,-6.6l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm3.6,-3.6l10.1,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.8,-9.9Zm19.8,-10.1l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm3.6,-3.6l10.1,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.8,-9.9Zm19.8,-10.1l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm3.6,-3.6l10.1,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.8,-9.9Zm19.8,-10.1l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm3.6,-3.6l10.1,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.8,-9.9Zm19.8,-10.1l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm13.4,6.3l-9.9,-9.9l10.2,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0Zm10,-20l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm13.4,6.3l-9.9,-9.9l10.2,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-3.2,0Zm93,-20l10.1,10.1l-9.9,9.9l-3.2,0l-9.9,-9.9l10.2,-10.1l2.7,0Zm7,0l13.2,0l-6.6,6.6l-6.6,-6.6Zm6.6,13.7l6.3,6.3l-12.7,0l6.4,-6.3Zm-45.1,6.3l-1.5,0l-9.9,-9.9l10.2,-10.1l2.7,0l10.1,10.1l-9.9,9.9l-1.7,0Zm-40,170.6l0,-31l0.2,-0.2l15.8,15.8l-15.8,15.8l-0.2,-0.4Zm0,9l0.2,-0.2l5.6,5.6l-5.8,0l0,-5.4Zm14.4,5.4l-9.9,-9.9l15.8,-15.8l15.8,15.8l-9.9,9.9l-11.8,0Zm10.1,-29.9l15.5,-15.5l0,31l-15.5,-15.5Zm-4.3,-4.2l-15.8,-15.8l15.8,-15.8l15.8,15.8l-15.8,15.8Zm-20,-20l-0.2,-0.2l0,-31l0.2,-0.2l15.8,15.8l-15.8,15.6Zm4.3,-35.8l1,-1c7,3.3 13.8,7.1 20.4,11.1l-5.6,5.6l-15.8,-15.7Zm8.5,-8.4l7.3,-7.3l15.8,15.8l-2.9,2.9c-6.6,-4.2 -13.3,-8 -20.2,-11.4Zm-13,-36.1l0,-31.3l0.1,-0.1l15.9,15.9l-15.8,15.8l-0.2,-0.3Zm20.2,-11.2l15.8,15.8l-15.8,15.8l-15.8,-15.8l15.8,-15.8Zm19.8,11.2l-15.5,-15.5l15.5,-15.5l0,31Zm0,9l0,31l-15.5,-15.5l15.5,-15.5Zm-19.8,-28.7l-15.9,-15.9l10,-10l11.9,0l10,10l-16,15.9Zm-15.8,-55.9l15.6,-15.6l15.6,15.6l-31.2,0Zm27.3,5l-6.6,6.6l-6.6,-6.6l13.2,0Zm-20.2,0l10.1,10.1l-9.9,9.9l-3.2,0l-9.9,-9.9l10.2,-10.1l2.7,0Zm7.3,20l6.3,-6.3l6.3,6.3l-12.6,0Zm36.3,-6.3l6.3,6.3l-12.7,0l6.4,-6.3Zm0,-7.1l-6.6,-6.6l13.2,0l-6.6,6.6Zm-30.9,-31.4l5.6,-5.6l7.5,18.7l-13.1,-13.1Zm-4.2,-4.2l-7.4,-7.4l7.4,-18.6l7.4,18.5l-7.4,7.5Zm-9.8,-1.4l5.6,5.6l-13.1,13.1l7.5,-18.7Zm-8.5,30.4l-6.6,6.6l-6.6,-6.6l13.2,0Zm-6.6,13.7l6.3,6.3l-12.6,0l6.3,-6.3Zm10.7,11.3l-5.7,5.7l-0.1,-0.1l0,-5.6l5.8,0Zm-5.8,54.6l0.2,-0.2l15.8,15.8l-8.8,8.8c-1.8,-0.8 -3.6,-1.6 -5.5,-2.4c-0.6,-0.2 -1.2,-0.5 -1.7,-0.7l0,-21.3Zm34.6,125.4l5.4,-5.4l0,5.4l-5.4,0Zm5.4,-54.4l-15.5,-15.5l6.5,-6.5c3.1,2 6.1,4.2 9,6.4l0,15.6Zm-1.8,-29.2l1.8,-1.8l0,3l-1.8,-1.2Zm1.8,-91.1l-5.3,-5.3l5.3,0l0,5.3Zm85,-10.3l-26.5,0l-9.9,-9.9l10.2,-10.1l6.2,0l20,20Zm-79.7,-25l-17.3,-43.3l52,43.3l-34.7,0Zm-31.5,-47.9l-19,47.6l0,0.3l-124.8,0l143.8,-47.9Zm-248.8,52.9l6.5,0l10.1,10.1l-9.9,9.9l-46.7,0l40,-20Zm230,25l0,73.8c-23.1,-8.9 -47.5,-13.5 -72.5,-13.8l0,-60l72.5,0Zm-275,270c0,-109.6 88.2,-198.6 197.5,-200l0,110l-147.5,0c-5.5,0 -10,4.5 -10,10l0,200c-25.1,-33.4 -40,-75 -40,-120Zm200,200c-59.7,0 -113.4,-26.2 -150,-67.7l0,-177.3l119.8,0c-12.1,9.1 -19.8,23.6 -19.8,39.9c0,21 12.9,38.9 31.3,46.4l0,-31.5l37.1,0l0,5l-32.2,0l0,28.3c4.4,1.3 9.1,2 13.9,2c27.6,0 50,-22.4 50,-50c0,-16.3 -7.8,-30.7 -19.8,-39.9l129.7,0l0,165c-36.5,48.4 -94.6,79.8 -160,79.8Zm170,-94.6l0,-185.4c0,-5.5 -4.5,-10 -10,-10l-35,0l0,-66.1c45.7,36.7 75,93 75,156.1c0,38.7 -11,74.8 -30,105.4Z" style="fill:#fff;fill-rule:nonzero;"/>
                        </svg>
                    </div>
                    </div>
                </div>
            </article>
            <section class="su-container">
                <p class="github">
                    <span>SipaUI est distribué librement sur <a href="https://github.com/Ouest-France/platform-app-sipaui" target="_blank" class="su-old-blank">Github</a>.<br />
                    Toute demande d’évolution est la bienvenue.</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 32" xmlns:serif="http://www.serif.com/" alt="Logo GitHub" class="logo-github" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                            <path d="M16.288,0c-8.995,0 -16.288,7.293 -16.288,16.29c0,7.197 4.667,13.302 11.14,15.457c0.815,0.149 1.112,-0.354 1.112,-0.786c0,-0.386 -0.014,-1.411 -0.022,-2.77c-4.531,0.984 -5.487,-2.184 -5.487,-2.184c-0.741,-1.881 -1.809,-2.382 -1.809,-2.382c-1.479,-1.011 0.112,-0.991 0.112,-0.991c1.635,0.116 2.495,1.679 2.495,1.679c1.453,2.489 3.813,1.77 4.741,1.354c0.148,-1.053 0.568,-1.771 1.034,-2.178c-3.617,-0.411 -7.42,-1.809 -7.42,-8.051c0,-1.778 0.635,-3.232 1.677,-4.371c-0.168,-0.412 -0.727,-2.068 0.159,-4.311c0,0 1.368,-0.438 4.48,1.67c1.299,-0.361 2.693,-0.542 4.078,-0.548c1.383,0.006 2.777,0.187 4.078,0.548c3.11,-2.108 4.475,-1.67 4.475,-1.67c0.889,2.243 0.33,3.899 0.162,4.311c1.044,1.139 1.675,2.593 1.675,4.371c0,6.258 -3.809,7.635 -7.438,8.038c0.585,0.503 1.106,1.497 1.106,3.017c0,2.177 -0.02,3.934 -0.02,4.468c0,0.436 0.293,0.943 1.12,0.784c6.468,-2.159 11.131,-8.26 11.131,-15.455c0,-8.997 -7.294,-16.29 -16.291,-16.29" style="fill:#181717;"/>
                        </svg>
                    </span>
                </p>
            </section>
        </main>
    </body>
</html>
