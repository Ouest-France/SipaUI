<!DOCTYPE html>
<html lang="fr">
    <?php
    include(__DIR__."/_fragments/_head.php");
    ?>
    <body>
        <header role="banner">
            <?php
            include(__DIR__."/_fragments/_identite.php");
            ?>

            <nav role="navigation">
                <?php
                $actif='avancement';
                include(__DIR__."/_fragments/_nav.php");
                ?>
            </nav>
        </header>

        <main class="su-editorial su-padding-b-standard" role="main">

            <article class="conteneur integre" role="article">
                <h1>Liste des composants intégrés</h1>

                <ul class="su-not-list">
                	<li>
                	    <h2>Typo</h2>
                	    <ul>
                	    	<li>Titres (avec gestion de typo spécifique)</li>
                	    	<li>Paragraphes</li>
                	    	<li>Emphase</li>
                	    </ul>
                	</li>
                	<li>
                	    <h2>Objets basiques</h2>
                	    <ul>
                	    	<li>Liens</li>
                	    	<li>Listes</li>
                	    	<li>Tableaux</li>
                	    	<li>Citations</li>
                	    	<li>Code</li>
                	    	<li>Séparateur (<code>hr</code>)</li>
                	    </ul>
                    </li>
                	<li>
                	    <h2>Boutons</h2>
                	    <p>En cours…</p>
                	</li>
                </ul>
            </article>

            <article class="conteneur" role="article">
                <h1>Suivi de l’avancement du projet</h1>

                <h2>Réunions d’avancement</h2>
                <div class="trop-large-responsif">
                    <table class="su-table su-plus tableau-suivi">
                        <caption>Tableau des réunions par dates antichronologiques. En gris, interrogations résolues.</caption>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Validé</th>
                                <th>En interrogation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><time datetime="2018-05-14">14/05/2018</time></td>
                                <td>
                                    <h3>Réunion «&nbsp;Stratégie d’intégration de SIPA-UI dans le Backoffice&nbsp;»</h3>
                                    <ul>
                                        <li>On ne réinvente pas tous les composants mais on se base sur Vuetify (material-design).</li>
                                        <li>3 déclinaisons des composants&nbsp;:
                                            <ul>
                                                <li>Composants HTML / CSS (déclinable en thème&nbsp;: OF, V&V, EDS&nbsp;?)</li>
                                                <li>Composants Vue.js, utilisant composants HTML/CSS (ex Spinnet attente sur click bouton)</li>
                                                <li>Composants Vanilla.js  pour le site OF.fr&nbsp;?</li>
                                            </ul>
                                        </li>
                                        <li>Pas de css spécifiques dans composant Vue.js</li>
                                        <li>Pour les widgets&nbsp;: Composant de sipa-ui wrappent des composants de Vuetify</li>
                                        <li>Pour ce qui n’est pas widgets  et qui n’est pas proposé par Vuetify&nbsp;: versé dans SIPA-UI</li>
                                        <li>Pour les composants SIPA UI&nbsp;: utilisation des conventions d’interfaces Vuetify</li>
                                        <li>Ne pas mettre un composant dans SIPA-UI doit être une exception</li>
                                        <li>Quand un composant Vue.j est ajouté à SIPA-UI le composant HTML/CSS pendant doit aussi être ajouté dans SIPA-UI</li>
                                        <li>un ajout de composant dans SIPA-UI entraîne une validation de la pull request par l’équipe SIPA-UI</li>
                                        <li>SIPA-UI a plusieurs themes&nbsp;: OF, V&V…</li>
                                    </ul>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <!-- ---------------------------------------------------------------------->
                            <tr>
                                <td><time datetime="2018-04-26">26/04/2018</time></td>
                                <td>
                                    <h3>Réunion de suivi</h3>
                                    <ul>
                                        <li>Équipe&nbsp;: le besoin d’un DEV se fait sentir pour valider le mode d’intégration et, plus tard, mettre en place un vrai POC (un projet créé suivant la cible et intégrant SipaUI).</li>
                                        <li>Population du Github&nbsp;: <a href="https://github.com/ouest-france/sipaui" target="_blank" class="su-blank">github.com/ouest-france/sipaui</a></li>
                                        <li>Ouverture de ce site au public</li>
                                        <li>Automatisation de la mise en Prod (sur le site SipaUI)</li>
                                        <li>Nouveautés sur ce site&nbsp;:
                                            <ul>
                                                <li>design amélioré (dont création d’un thème spécifique à la doc)</li>
                                                <li>architecture&nbsp;: «&nbsp;SipaUI intégré dans un site&nbsp;», «&nbsp;SipaUI et les Blocks Providers&nbsp;» et «&nbsp;Gestion des tailles&nbsp;»</li>
                                                <li>avancement&nbsp;: «&nbsp;Liste des composants intégrés&nbsp;»</li>
                                                <li>POC&nbsp;: «&nbsp;Les objets HTML basiques&nbsp;»</li>
                                            </ul>
                                        </li>
                                        <li>Le Studio a rédigé une doc de référence pour le design des textes (titres, paragraphes, liens…). Ce document nous servira à initier le template Ouest-France sur la base de SipaUI actuel et valider nos choix de variables.</li>
                                        <li>La prochaine réunion ne sera pas avant 3 semaines au mieux.</li>
                                        <li>A suivre&nbsp;:
                                            <ul>
                                                <li>Intégration de la gestion de police spécifique.</li>
                                                <li>Validation des breakpoints et de l’attendu en fonction de ceux-ci.</li>
                                                <li>Intégration des boutons.</li>
                                                <li>Intégration de JS.</li>
                                                <li>Intégration de la grille. (Quand tout ça sera fait, on devrait pouvoir passer en Beta…)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Gestion des pictos&nbsp;: continuons-nous avec une fonte de pictos&nbsp;?<br />
                                        	-> gestion lourde pour le Studio,<br />
                                        	-> impossibilité de picto avec plus d’une couleur,<br />
                                        	-> ressource lourde à charger une fois,<br />
                                        	-> quid des autres sites que Ouest-France&nbsp;?<br />
                                        	MAIS, si pas fonte&nbsp;:<br />
                                        	-> comment garantir la portabilité des icônes&nbsp;?<br />
                                        	-> quelle est la meilleure solution poids / capacité de design&nbsp;?<br />
                                        	Et si fonte&nbsp;:<br />
                                        	-> ne serait-ce pas mieux qu’elle soit gérée par les intégrateurs&nbsp;?<br />
                                        <li>Utilise-t-on la même grille qu’actuellement sur la Refonte&nbsp;?</li>
                                        <li>Comment Ouest-France gérera-t-il ses guidelines&nbsp;? Via les guidelines actuels ou via une version Ouest-France du site SipaUI&nbsp;?</li>
                                        <li>Quid des sites externes&nbsp;?<br />
                                        	-> Comment intégreront-ils un header Ouest-France&nbsp;? Quel sera le contenu de ce header&nbsp;? Comment pourront-ils le personnaliser&nbsp;?<br />
                                        	-> Il faudrait un référentiel des sites externes.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- ---------------------------------------------------------------------->
                             <tr>
                                <td><time datetime="2018-04-12">12/04/2018</time></td>
                                <td>
                                    <h3>Réunion de suivi</h3>
                                    <ul>
                                        <li>Afin de pouvoir avancer sur ce projet qui est assez attendu et peut devenir un point de blocage pour d’autres projets, il a été accepté que&nbsp;:
                                            <ul>
                                                <li>chaque semaine un jour minimum lui serait réservé</li>
                                                <li>sur cette journée, au minimum 1 intégrateur travaillera sur le projet et 1 designer pourra être sollicité</li>
                                                <li>des besoins UX, DEV ou OPS pourrait éventuellement être exprimés, on avisera au cas par cas</li>
                                                <li>sur les différents profils, il serait utile de faire tourner les personnes afin que tout le monde s’approprie l’outil ainsi que de l’enrichir de la vision de chacun
                                                    <br />->&nbsp;le jour bloqué sera le jeudi.
                                                    <br />->&nbsp;Corine Monnerie sera référante sur la partie Design et les membres du studio seront affectés au projet à tour de rôle.</li>
                                            </ul>
                                        </li>
                                        <li>Présentation de la nouvelle vision de sipaUI (cf. <a href="architecture.php">Architecture</a>).</li>
                                        <li>Après GitLab, un GitHub a été ouvert&nbsp;: <a href="https://github.com/ouest-france/sipaui" target="_blank" class="su-blank">github.com/ouest-france/sipaui</a>
                                            <br />Reste à le remplir…
                                        </li>
                                        <li>Vue.js.&nbsp;: après présentation du framework par OFM, il s’avère qu’il n’est pas vraiment adapté aux besoins d’un framework de composants graphiques. En effets les composants vue.js sont des composants au sens informatique, pas forcément au sens graphique. Du coup, sipaUI restera sur les technos JS présentes dans OuestStrap (jQuery + Vanilla).</li>
                                        <li>Pour avancer, une date de réunion sur les points de rupture sera fixée avec le studio, ainsi qu’une date pour avancer sur les composants graphiques (faire une liste des objets à créer et les classer par priorité).</li>
                                        <li>Document technique en cours&nbsp;: <a href="https://docs.google.com/document/d/12kJPyE8PlvCnfkdUXbfUci_c5qZUAvK82zpYEgcVqzk" target="_blank" class="su-blank">document Google</a></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Les points de rupture aujourd'hui en place sur SipaUI (480, 768, 980, 1280) ne répondent pas forcément au besoins du Studio.<br />
                                            -> à rediscuter.</li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- ---------------------------------------------------------------------->
                            <tr>
                                <td><time datetime="2018-03-15">15/03/2018</time></td>
                                <td>
                                    <h3>Réunion de suivi</h3>
                                    <ul>
                                        <li>Périodicité des réunions&nbsp;: les jeudis, tous les 15 jours à 16h00.</li>
                                        <li>Rappel de la création du canal Slack #sipa-ui</li>
                                        <li>Présentation de l’architecture CSS en cours de réflexion (cf. colonne interrogations).</li>
                                        <li>Annonce d'une réunion prévue sur vue.js avec un représentant d‘OFM (Ouest-France Multimédia).</li>
                                        <li>Besoin de standardisations des composants entre le Studio et l’Intégration.<br />
                                            -> Planification d’une réunion pour avancer sur ce point.</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li class="resolu">Grosse inconnue technique sur la gestion des appels CSS et de leur inter-opérabilité&nbsp;: comment les blocs des Blocks Providers vont-ils intégrer leurs CSS dans le site (attention aux problèmes de performance)</li>
                                        <li class="resolu">Incompréhension sur le terme «&nbsp;composants&nbsp;»&nbsp;: pour l’équipe qui gère le Page-Builder, un composant a un sens technique différent («&nbsp;composants on the shelf&nbsp;») du sens donné par le Studio et l’Intégration. Du coup quel sera l’approche composants de sipaUI&nbsp;?</li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- ---------------------------------------------------------------------->
                            <tr>
                                <td><time datetime="2018-03-02">02/03/2018</time></td>
                                <td>
                                    <h3>Réunion de suivi</h3>
                                    <ul>
                                        <li>Le nom du framework a été défini à SipaUI</li>
                                        <li>Préfixage : les classes utilisées par SipaUI seront toutes préfixées par «&nbsp;su-&nbsp;» ou par «&nbsp;su-js-&nbsp;» s'il s'agit d’une classe utilisée par du JS.</li>
                                        <li>Mise en place de ce site (non accessible de l’extérieur).</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li class="resolu">Nombre d’appels CSS dans le header&nbsp;:
                                            <ul>
                                                <li>2 (base/mobile + tablette/desktop/large),</li>
                                                <li>3 (base/mobile + phablette/tablette/ + desktop/large),</li>
                                                <li>ou 4 comme sur Ouest-France (base + mobile/phablette + tablette/desktop + large).</li>
                                            </ul>
                                            <p class="su-margin-0">La dernière solution présente l’inconvénient de faire charger 2 CSS (bloquantes) sur mobile, au lieu d’une seule, mais offre l’avantage d’avoir peu de phénomènes de surcharge.</p>
                                        </li>
                                        <li class="resolu">Périodicité des réunions&nbsp;:
                                            <ul>
                                                <li>tous les 15 jours ?</li>
                                                <li>Le jeudi&nbsp;?</li>
                                                <li>10h00, 16h00 ou 17h00&nbsp;?</li>
                                           </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- ---------------------------------------------------------------------->
                            <tr>
                                <td><time datetime="2018-02-15">15/02/2018</time></td>
                                <td>
                                    <h3>Réunion de suivi</h3>
                                    <ul>
                                        <li>Le nom des composant sera en anglais, excepté pour des notions métier où le français pourrait être utilisé, si jamais le cas devait se présenter</li>
                                        <li>Le type de nommage des classes pour les composants s’appuiera sur <a href="https://semantic-ui.com" target="_blank" class="su-blank">SemanticUI</a>.</li>
                                    </ul>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

        </main>
    </body>
</html>
