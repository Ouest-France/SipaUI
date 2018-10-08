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
                $actif='archi';
                include(__DIR__."/_fragments/_nav.php");
                ?>
            </nav>
        </header>


        <main class="su-editorial su-padding-b-standard" role="main">

            <article class="conteneur" role="article">
                <h1>Architecture</h2>

                <h2>SipaUI intégré dans un site</h2>
                <p>SipaUI porte tout le CSS et le JS nécessaire à l’affichage des composants graphiques prévus par la charte. Un site l’utilisant ne devrait donc pas avoir besoin de CSS supplémentaire pour afficher ces composants, d’autant plus que SipaUI intègre un système de «&nbsp;templating&nbsp;» poussé qui devrait lui permettre de répondre à ses besoins de personnalisation. SipaUI intègre aussi une grille sur 24 colonnes et des classes de marges qui permettent de mettre en page le contenu de façon basique. Toutefois, ce site aura besoin de CSS propres pour gérer la mise en page et la gestion des blocs plus finement, ainsi que tous les cas non prévus dans SipaUI. Par conséquent, il faudra <strong>concaténer les CSS du site avec ceux de SipaUI suivant la même logique</strong> (même découpage en fonction des media-querries) afin d’optimiser les performances en évitant d’appeler plusieurs fichiers CSS.</p>

                <h2>SipaUI et les Blocks Providers</h2>
                <p>Un bloc ne devrait pas avoir de CSS propres. Dans quasiment tous les cas, les composants graphiques de SipaUI devraient suffirent à gérer l’affichage du contenu d’un bloc. Dans le cas contraire, le créateur du bloc devra passer la validation de l'équipe Plateforme. Il y aura alors 2 possibilités&nbsp;:</p>
                    <ul>
                        <li>Il y a des manques dans le framework et l’équipe accepte les évolutions nécessaires via les pull-requests sur Github.</li>
                        <li>Il s'agit de besoins spécifiques à un BP très particulier (ie un bloc météo) et dans ce cas le bloc pourra porter ses propres CSS. Il serait alors possible que ces CSS soient appelées dans le body (au lieu d’être concaténées avec les CSS du site) pour éviter de ralentir le site, mais attention à l’effet <a href="https://fr.wikipedia.org/wiki/FOUC" target="_blank" class="su-blank">FOUC</a></li>
                    </ul>
                    <p>Dans tous les cas (mais surtout le second), l’équipe Plateforme veillera à ce que cela soit une exception plutôt que la norme (l'ajout de ressources JS/CSS a un impact direct sur les performances frontend de la page).</p>

                <h2>Matriochka de SCSS</h2>

                <div class="cell bas">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.75 235.35" class="matriochka" style="width: 100px; margin-right: 40px">
                        <title>Matriochka</title>
                        <path d="M45.88,234.93c18,0,37.43-5.14,40.85-9.05s0.89-8.59-.73-9.05-3.11-2.27-2-5.87c1.63-5.08,3.63-19.12,5.4-33.94,2-16.39,1-45.32-1-62.27-1.28-11.1-5.87-26.1-5.87-39.31,0-10.25,1.71-18.34,1.71-30.33,0-31.56-22.15-44-38.41-44S7.47,13.56,7.47,45.11c0,12,1.71,20.09,1.71,30.33,0,13.21-4.59,28.2-5.87,39.31-2,17-3,45.88-1,62.27,1.77,14.82,3.77,28.86,5.4,33.94,1.16,3.6-.38,5.42-2,5.87S1.6,222,5,225.88,27.89,234.93,45.88,234.93Z" transform="translate(-0.51 -0.33)" fill="#fff" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M45.88,86.74c0,10.26-42,22.31-43.33,35.75" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M45.87,86.74c0,10.26,42,22.31,43.33,35.75" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><ellipse cx="45.37" cy="55.04" rx="29.38" ry="31.36" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M17.83,46A36,36,0,0,0,28.13,47.5c12.08,0,22.39-5.79,26.48-13.94A26.45,26.45,0,0,0,67.68,46.89c3.71,1.76,5.57,4.36,7.34,12.39" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M47.87,66.68c-1.55.22-2.33,0.55-4,0" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M40.45,56.38c-1.22-2.44-7.26-8-14.5.66" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M25.79,57.13a3.16,3.16,0,0,1-2.42-.29" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M26.3,56.16a2.62,2.62,0,0,1-1.86-.78" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M27.27,55.1a2.23,2.23,0,0,1-1.52-1" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><circle cx="33.04" cy="55.44" r="3.39" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M33.54,54.1H33.42a1.11,1.11,0,0,1,.12.49,1.14,1.14,0,0,1-1.14,1.14,1.11,1.11,0,0,1-.51-0.14,1.63,1.63,0,0,0,0,.16A1.66,1.66,0,1,0,33.54,54.1Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M51.31,56.38c1.22-2.44,7.26-8,14.5.66" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M66,57.13a3.16,3.16,0,0,0,2.42-.29" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M65.46,56.16a2.62,2.62,0,0,0,1.86-.78" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M64.49,55.1a2.23,2.23,0,0,0,1.52-1" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><circle cx="57.71" cy="55.44" r="3.39" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M58.22,54.1H58.1a1.11,1.11,0,0,1,.12.49,1.14,1.14,0,0,1-1.14,1.14,1.11,1.11,0,0,1-.51-0.14,1.63,1.63,0,0,0,0,.16A1.66,1.66,0,1,0,58.22,54.1Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M52.65,74.4c-0.63.5-4.82,0.87-6.78,0.87s-6.14-.37-6.78-0.87" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M50.38,77c-1.12.66-1.76,1.73-4.51,1.73S42.49,77.69,41.37,77" transform="translate(-0.51 -0.33)" fill="none" stroke="#231f20" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/><path d="M42.78,205.33a6.06,6.06,0,0,0,1-1.1,8.92,8.92,0,0,0,.84-1.52,9.54,9.54,0,0,0,.56-1.72,8.08,8.08,0,0,0,.2-1.76,5.52,5.52,0,0,0-.18-1.42,4,4,0,0,0-.53-1.19l-0.34-.51a4.91,4.91,0,0,0-.37-0.47,3.6,3.6,0,0,0-1.41-1,4.54,4.54,0,0,0-3.06-.17,3,3,0,0,0-1.06.58l-0.66.53a1.92,1.92,0,0,0-.47.55,10.71,10.71,0,0,0-.64,1.35,13.37,13.37,0,0,0-.42,1.28q-0.18.65-.31,1.36t-0.34,1.57l0,0.11-0.76,1.28a2.85,2.85,0,0,1-.32.23l-0.23.16-0.17.08-0.35,0-0.36,0-0.13,0-0.36-.13-0.36-.17c-0.21-.17-0.34-0.28-0.47-0.4a4.35,4.35,0,0,0-.37-0.31l-0.11-.12a9,9,0,0,1-.78-1.69,4.88,4.88,0,0,1-.24-1.48,6.45,6.45,0,0,1,.16-1.41c0.1-.45.24-1,0.42-1.55a1.13,1.13,0,0,1,0-.13,0.86,0.86,0,0,0-.2-0.67,0.61,0.61,0,0,0-.45-0.2,0.85,0.85,0,0,0-.72.41,8.84,8.84,0,0,1-.42,1.17A3.42,3.42,0,0,0,29,198a2.46,2.46,0,0,0,0,.34v0.4q0,0.65.07,1.34a8,8,0,0,0,.24,1.31,5.94,5.94,0,0,0,.47,1.2,3.69,3.69,0,0,0,.74,1q0.43,0.4.8,0.7a4.24,4.24,0,0,0,.67.46,2.85,2.85,0,0,0,.66.26,3.74,3.74,0,0,0,1.17.07l0.41,0,0.34,0a1.22,1.22,0,0,0,.22-0.12A4.58,4.58,0,0,0,37,202a15.89,15.89,0,0,0,.38-1.76,13.22,13.22,0,0,1,.56-2.16,2.23,2.23,0,0,1,.3-0.65c0.1-.16.2-0.32,0.29-0.47l0.09-.11,0.35-.31,0.37-.33,0.1-.06,0.36-.16a3,3,0,0,1,.43-0.16,3.45,3.45,0,0,1,.51,0l0.5,0,0.86,0.3,0.35,0.24,0.37,0.26,0.09,0.09,0.38,0.51a1.86,1.86,0,0,1,.21.32,1.68,1.68,0,0,1,.13.38c0,0.11.09,0.32,0.2,0.61l0,0.13a13.28,13.28,0,0,1-.09,1.48,8.94,8.94,0,0,1-.31,1.51,6.09,6.09,0,0,1-.62,1.43,4.84,4.84,0,0,1-1,1.2,1.07,1.07,0,0,0-.17.56,0.6,0.6,0,0,0,.17.45A0.88,0.88,0,0,0,42.78,205.33Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M29.11,188.89a1.07,1.07,0,0,0-.77.29,0.87,0.87,0,0,0-.3.67,0.82,0.82,0,0,0,.3.65,1.14,1.14,0,0,0,1.52,0,0.82,0.82,0,0,0,.3-0.65,0.87,0.87,0,0,0-.3-0.67A1,1,0,0,0,29.11,188.89Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M38.89,189.07l-5.33,0a1,1,0,0,0-.47.3,0.69,0.69,0,0,0-.16.43,0.6,0.6,0,0,0,.17.42,1.2,1.2,0,0,0,.59.31l5.28,0,5.33,0a1,1,0,0,0,.61-0.28,0.69,0.69,0,0,0,.19-0.46,0.71,0.71,0,0,0-.21-0.49,0.94,0.94,0,0,0-.67-0.25Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M34,185H50.8a1,1,0,0,0,.6-0.28,0.69,0.69,0,0,0,.19-0.46,0.71,0.71,0,0,0-.21-0.49,1,1,0,0,0-.68-0.25H44.4l0.07-.46q0.05-.37.08-0.74c0-.24,0-0.48,0-0.73a7.88,7.88,0,0,0-.43-2.73A5.48,5.48,0,0,0,43,176.9a4.91,4.91,0,0,0-1.77-1.17,6.68,6.68,0,0,0-4.46,0,5.6,5.6,0,0,0-1.75,1,4.93,4.93,0,0,0-1.18,1.5,4,4,0,0,0-.43,1.83,4.81,4.81,0,0,0,.25,1.47,3.75,3.75,0,0,0,.74,1.32l0.58,0.66H33.86a1,1,0,0,0-.52.3,0.7,0.7,0,0,0-.17.43,0.61,0.61,0,0,0,.17.43A1.27,1.27,0,0,0,34,185Zm0.81-5.06a2.31,2.31,0,0,1,.42-1.34,3.82,3.82,0,0,1,1-1,5,5,0,0,1,1.34-.63,4.5,4.5,0,0,1,3.22.15,3.68,3.68,0,0,1,1.31,1,4.69,4.69,0,0,1,.79,1.53,6.3,6.3,0,0,1,.27,1.87,5.52,5.52,0,0,1-.06.82c0,0.26-.09.52-0.14,0.79l-0.07.32H37.14L37,183.38l-0.15-.17-0.09-.08a7.47,7.47,0,0,1-.69-0.59,5.43,5.43,0,0,1-.63-0.72A4,4,0,0,1,35,181,2.78,2.78,0,0,1,34.79,179.93Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M43.2,171.45a3.7,3.7,0,0,0,1.25-1.12,3.27,3.27,0,0,0,.65-1.83c0-.71,0-1.44,0-2.16a2.22,2.22,0,0,0-.37-1.08,10,10,0,0,0-.84-1.15l-0.32-.37L44,163.5a4.24,4.24,0,0,0,.55-0.36,4.74,4.74,0,0,0,.45-0.39,1,1,0,0,0,.1-0.53,0.77,0.77,0,0,0-.17-0.41,0.65,0.65,0,0,0-.34-0.2,0.77,0.77,0,0,0-.47.06l-0.51.22-0.43.27c-0.23.14-.47,0.28-0.71,0.41a2.16,2.16,0,0,1-.74.25,25.14,25.14,0,0,1-3.86.25l-3.73,0a1.1,1.1,0,0,0-.54.39,0.67,0.67,0,0,0-.13.49l0,0.11,0,0.1a2.35,2.35,0,0,0-.14.86,5.41,5.41,0,0,0,.12,1.11,8.46,8.46,0,0,0,.29,1.06,3.13,3.13,0,0,0,.3.67c0.15,0.24.3,0.47,0.46,0.7l0.5,0.71a4.16,4.16,0,0,0,.77.8,6.87,6.87,0,0,0,1,.66l0.77,0.45a3.58,3.58,0,0,0,.68.33,8.05,8.05,0,0,0,1.73.45,6.18,6.18,0,0,0,1.73,0A4.69,4.69,0,0,0,43.2,171.45Zm-1.86-.94a7.64,7.64,0,0,1-1.75-.19,7.79,7.79,0,0,1-1.7-.6,6.13,6.13,0,0,1-1.49-1,4.94,4.94,0,0,1-1.1-1.54,3.5,3.5,0,0,1-.15-0.38L35,166.24a4.75,4.75,0,0,1-.17-0.65,3.49,3.49,0,0,1-.06-0.63v-0.41h0.41l3.29,0a14.64,14.64,0,0,0,3.37-.34l0.31-.07,0.22,0.39a10,10,0,0,1,.61.79l0.56,0.83,0,0.1a2.86,2.86,0,0,1,.13,1c0,0.29,0,.58,0,0.89l0,0.13-0.17.5a5.72,5.72,0,0,1-.21.54l-0.06.09a3.54,3.54,0,0,1-.34.36l-0.29.28-0.08.08-0.11,0-0.4.13a4.46,4.46,0,0,1-.49.15H41.33Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M29.62,157.82h0.85l2.19,0c1.09,0,2.22,0,3.34,0s2.21-.1,3.26-0.22a12.83,12.83,0,0,0,2.84-.63,3.61,3.61,0,0,0,1.27-.74,4.62,4.62,0,0,0,.92-1.15,5.36,5.36,0,0,0,.56-1.42,6.9,6.9,0,0,0,.18-1.59,7.41,7.41,0,0,0-.15-1.42,6.44,6.44,0,0,0-.44-1.4,5,5,0,0,0-.75-1.18,2.94,2.94,0,0,0-1-.77,10.5,10.5,0,0,0-2.62-.85c-1-.21-2.18-0.37-3.38-0.49s-2.45-.2-3.72-0.25-2.47-.08-3.61-0.1a1,1,0,0,0-.51.3,0.7,0.7,0,0,0-.17.43,0.61,0.61,0,0,0,.17.43,1.22,1.22,0,0,0,.59.31l1.78,0q1.09,0,2.32.07L36,147.34c0.85,0.06,1.66.14,2.4,0.24s1.43,0.23,2,.37a3.66,3.66,0,0,1,1.45.62,4.29,4.29,0,0,1,1.28,1.59,4.4,4.4,0,0,1,.4,1.8,5.65,5.65,0,0,1-.22,1.54,3.3,3.3,0,0,1-.93,1.5,3.48,3.48,0,0,1-1.46.8,11.34,11.34,0,0,1-2,.4c-0.75.08-1.56,0.14-2.41,0.17s-1.7,0-2.54,0l-2.45,0-2,0a1,1,0,0,0-.52.3,0.69,0.69,0,0,0-.16.43,0.61,0.61,0,0,0,.17.43A1.26,1.26,0,0,0,29.62,157.82Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M44.64,138.2c0-.95,0-1.91,0-2.86a1,1,0,0,0-.34-0.56,0.68,0.68,0,0,0-.48-0.14,0.74,0.74,0,0,0-.45.27,0.93,0.93,0,0,0-.18.67q0,0.39,0,.76t0,0.74v0.4h-13v-2.09a1,1,0,0,0-.29-0.5,0.69,0.69,0,0,0-.42-0.19,0.67,0.67,0,0,0-.42.16,1.08,1.08,0,0,0-.34.52V141a0.91,0.91,0,0,0,.24.64,0.71,0.71,0,0,0,.47.22,0.67,0.67,0,0,0,.48-0.18,1,1,0,0,0,.29-0.65V139h13l0,0.43c0,0.27,0,.53,0,0.79V141a0.91,0.91,0,0,0,.24.64,0.71,0.71,0,0,0,.47.22,0.69,0.69,0,0,0,.48-0.18,1,1,0,0,0,.29-0.65C44.62,140.11,44.63,139.15,44.64,138.2Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M51.28,195.78l0.45,0a2.76,2.76,0,0,1,.49.17l0.36,0.16,0.1,0.06,0.37,0.33,0.35,0.31L53.5,197c0.09,0.16.18,0.31,0.29,0.47a2.33,2.33,0,0,1,.3.67,13.12,13.12,0,0,1,.55,2.14A15.7,15.7,0,0,0,55,202a4.57,4.57,0,0,0,2.18,2.84,1.07,1.07,0,0,0,.21.12l0.33,0,0.42,0a3.72,3.72,0,0,0,1.17-.07,2.83,2.83,0,0,0,.66-0.26,4.32,4.32,0,0,0,.67-0.46q0.37-.3.8-0.7a3.69,3.69,0,0,0,.74-1,5.92,5.92,0,0,0,.47-1.2,8,8,0,0,0,.24-1.31q0.07-.69.07-1.33v-0.4a2.32,2.32,0,0,0,0-.32,3.52,3.52,0,0,0-.28-1.1,8.71,8.71,0,0,1-.42-1.17,0.85,0.85,0,0,0-.72-0.41,0.62,0.62,0,0,0-.45.2,0.84,0.84,0,0,0-.2.62c0,0.08,0,.13,0,0.18,0.18,0.58.32,1.1,0.42,1.55a6.46,6.46,0,0,1,.16,1.41,4.87,4.87,0,0,1-.24,1.48,9.1,9.1,0,0,1-.78,1.69l-0.11.12a4.53,4.53,0,0,0-.37.3l-0.39.34a3.71,3.71,0,0,1-.44.22l-0.36.13-0.13,0-0.37,0-0.35,0-0.17-.08-0.23-.16a2.94,2.94,0,0,1-.32-0.23l-0.1-.11-0.71-1.27c-0.13-.56-0.24-1.08-0.34-1.57s-0.2-.92-0.31-1.36-0.26-.86-0.42-1.28a10.7,10.7,0,0,0-.64-1.35,1.93,1.93,0,0,0-.47-0.55L53.59,195a3.06,3.06,0,0,0-1.06-.58,4.53,4.53,0,0,0-3.06.17,3.58,3.58,0,0,0-1.4,1,4.81,4.81,0,0,0-.38.48l-0.34.51a4,4,0,0,0-.53,1.19,5.51,5.51,0,0,0-.18,1.42,8.1,8.1,0,0,0,.2,1.76,9.57,9.57,0,0,0,.56,1.72,9,9,0,0,0,.84,1.52,6,6,0,0,0,1,1.1,0.88,0.88,0,0,0,1-.06,0.6,0.6,0,0,0,.17-0.45,1,1,0,0,0-.23-0.62,4.36,4.36,0,0,1-1-1.13,6.08,6.08,0,0,1-.62-1.43,9,9,0,0,1-.31-1.51,13.16,13.16,0,0,1-.09-1.48l0-.13c0.1-.29.17-0.49,0.19-0.61a1.75,1.75,0,0,1,.13-0.38,1.86,1.86,0,0,1,.21-0.32l0.38-.51,0.09-.09,0.37-.26,0.35-.24L50,196l0.88-.27h0.38Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M63.64,189.18a1.07,1.07,0,0,0-.77-0.29,1,1,0,0,0-.74.29,0.86,0.86,0,0,0-.3.67,0.83,0.83,0,0,0,.3.65h0a1.14,1.14,0,0,0,1.52,0,0.82,0.82,0,0,0,.3-0.65A0.87,0.87,0,0,0,63.64,189.18Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M53.09,189.07l-5.33,0a0.93,0.93,0,0,0-.66.25,0.71,0.71,0,0,0-.21.49,0.68,0.68,0,0,0,.19.46,1,1,0,0,0,.66.28l5.28,0,5.28,0a1.2,1.2,0,0,0,.58-0.31,0.6,0.6,0,0,0,.17-0.43,0.69,0.69,0,0,0-.17-0.43,1,1,0,0,0-.56-0.32Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M58.8,184.24a0.69,0.69,0,0,0-.16-0.43,1,1,0,0,0-.52-0.31H57l0.58-.66a3.75,3.75,0,0,0,.74-1.32,4.81,4.81,0,0,0,.24-1.47,4,4,0,0,0-.43-1.83,4.93,4.93,0,0,0-1.18-1.5,5.61,5.61,0,0,0-1.75-1,6.69,6.69,0,0,0-4.45,0A4.9,4.9,0,0,0,49,176.9a5.48,5.48,0,0,0-1.18,1.93,7.91,7.91,0,0,0-.43,2.74c0,0.25,0,.49,0,0.73s0,0.49.08,0.74l0.07,0.46H41.26a1,1,0,0,0-.67.25,0.71,0.71,0,0,0-.21.49,0.69,0.69,0,0,0,.19.46,1,1,0,0,0,.66.28H58a1.22,1.22,0,0,0,.59-0.31A0.61,0.61,0,0,0,58.8,184.24Zm-2.29-2.4a5.37,5.37,0,0,1-.63.72,7.45,7.45,0,0,1-.69.59l-0.09.08-0.15.17-0.12.11H49.11L49,183.18c-0.06-.27-0.11-0.53-0.14-0.79a5.58,5.58,0,0,1-.06-0.82,6.31,6.31,0,0,1,.27-1.87,4.7,4.7,0,0,1,.79-1.53,3.7,3.7,0,0,1,1.31-1,4.52,4.52,0,0,1,3.22-.15,5.1,5.1,0,0,1,1.34.63,3.82,3.82,0,0,1,1,1,2.31,2.31,0,0,1,.42,1.34,2.78,2.78,0,0,1-.2,1A4,4,0,0,1,56.51,181.83Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M48.78,171.45a4.7,4.7,0,0,0,1.58.51,6.18,6.18,0,0,0,1.73,0,8,8,0,0,0,1.72-.45,3.61,3.61,0,0,0,.68-0.33l0.76-.45a6.83,6.83,0,0,0,1-.66,4.13,4.13,0,0,0,.77-0.81l0.5-.71q0.24-.34.46-0.68a3.14,3.14,0,0,0,.31-0.69,8.31,8.31,0,0,0,.29-1.06,5.42,5.42,0,0,0,.12-1.11,2.37,2.37,0,0,0-.14-0.87l0-.1v-0.1a0.67,0.67,0,0,0-.13-0.49,1.09,1.09,0,0,0-.54-0.39l-3.73,0a25.78,25.78,0,0,1-3.87-.25,2.15,2.15,0,0,1-.72-0.25c-0.24-.12-0.48-0.26-0.71-0.4l-0.44-.27-0.51-.21a0.76,0.76,0,0,0-.47-0.06,0.65,0.65,0,0,0-.34.2,0.77,0.77,0,0,0-.17.41,1,1,0,0,0,.1.53,4.66,4.66,0,0,0,.45.39,4.29,4.29,0,0,0,.55.36l0.43,0.24-0.32.38a9.88,9.88,0,0,0-.84,1.15,2.22,2.22,0,0,0-.37,1.08c0,0.73,0,1.46,0,2.17a3.27,3.27,0,0,0,.65,1.83A3.71,3.71,0,0,0,48.78,171.45Zm-0.35-5.14,0-.1,0.56-.83a10.18,10.18,0,0,1,.64-0.83l0.08-.11,0.14-.28,0.29,0.09a14.78,14.78,0,0,0,3.37.34l3.29,0h0.41V165a3.57,3.57,0,0,1-.06.63,5,5,0,0,1-.17.65l-0.18.54a3.46,3.46,0,0,1-.16.39,4.93,4.93,0,0,1-1.1,1.53,6.19,6.19,0,0,1-1.48,1,7.82,7.82,0,0,1-1.7.6,8,8,0,0,1-1.8.21,3.58,3.58,0,0,1-.58-0.16l-0.4-.13-0.11,0-0.08-.08-0.29-.28a3.58,3.58,0,0,1-.34-0.36l-0.06-.09c-0.08-.18-0.15-0.36-0.21-0.54l-0.19-.63c0-.31,0-0.6,0-0.89A2.87,2.87,0,0,1,48.44,166.31Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M62.63,145.61q-1.72,0-3.61.1c-1.28,0-2.53.13-3.73,0.25s-2.34.29-3.38,0.49a10.48,10.48,0,0,0-2.61.84,3,3,0,0,0-1,.78,4.89,4.89,0,0,0-.74,1.18,6.4,6.4,0,0,0-.45,1.4,7.41,7.41,0,0,0-.15,1.42,6.9,6.9,0,0,0,.18,1.59,5.37,5.37,0,0,0,.56,1.42,4.62,4.62,0,0,0,.92,1.15,3.62,3.62,0,0,0,1.26.74,12.89,12.89,0,0,0,2.85.63c1.05,0.12,2.15.19,3.26,0.22s2.25,0,3.34,0l3.15,0A1.26,1.26,0,0,0,63,157.5a0.6,0.6,0,0,0,.17-0.42,0.69,0.69,0,0,0-.16-0.43,1,1,0,0,0-.52-0.3l-2,0-2.45,0c-0.85,0-1.7,0-2.54,0s-1.65-.08-2.41-0.17a11.32,11.32,0,0,1-2-.4,3.49,3.49,0,0,1-1.47-.81,3.28,3.28,0,0,1-.92-1.49,5.67,5.67,0,0,1-.22-1.54,4.4,4.4,0,0,1,.4-1.8,4.28,4.28,0,0,1,1.28-1.59,3.64,3.64,0,0,1,1.45-.62c0.59-.14,1.27-0.26,2-0.37s1.55-.18,2.4-0.24l2.49-.14q1.23-.05,2.32-0.07h0l1.82,0a1.26,1.26,0,0,0,.55-0.31,0.61,0.61,0,0,0,.17-0.42,0.69,0.69,0,0,0-.16-0.43A1,1,0,0,0,62.63,145.61Z" transform="translate(-0.51 -0.33)" fill="#231f20"/><path d="M62,141.7a0.66,0.66,0,0,0,.48.19,0.71,0.71,0,0,0,.47-0.22,0.93,0.93,0,0,0,.24-0.66v-5.64a1.08,1.08,0,0,0-.34-0.52,0.68,0.68,0,0,0-.42-0.16,0.69,0.69,0,0,0-.42.19,1,1,0,0,0-.3.59v2h-13v-0.4c0-.25,0-0.49,0-0.74s0-.5,0-0.76a0.92,0.92,0,0,0-.18-0.66,0.74,0.74,0,0,0-.45-0.27,0.67,0.67,0,0,0-.48.14,1,1,0,0,0-.35.64c0,0.89,0,1.85,0,2.78s0,1.92,0,2.88a1,1,0,0,0,.29.6,0.73,0.73,0,0,0,.48.18,0.71,0.71,0,0,0,.47-0.22,0.94,0.94,0,0,0,.24-0.66v-0.8q0-.39,0-0.79l0-.43h13v2.15A1,1,0,0,0,62,141.7Z" transform="translate(-0.51 -0.33)" fill="#231f20"/>
                        </svg>
                </div>

                <p class="cell bas">Pour un maximum de performances, il faut le <strong>moins d’appels CSS possible</strong> (chaque appel CSS est un point de blocage à l’affichage). Toutefois les navigateurs, si on leur dit via les media-querries  quel CSS est utile pour eux, sont capables de différer le chargement de CSS inutiles au moment de l’affichage.<br />
                => Faire 2 appels CSS, un vers <strong>default.css</strong> qui servira pour tous les cas et un vers <strong>large.css</strong> qui surcharge pour les écrans à partir de 980px. On a ainsi un seul appel bloquant et le poids du fichier appelé ne sert qu'aux mobiles.</p>

                <h2>Schéma imbriqué</h2>

                <p class="su-margin-b-standard">Voici à quoi peut ressembler l’imbrication des styles pour un site web SIPA, nommé «&nbsp;projet&nbsp;» pour l’exemple.</p>
                <div class="trop-large-responsif su-margin-b-standard">
                    <svg xmlns="http://www.w3.org/2000/svg" class="carte" viewBox="0 0 253.3 548.1">
                        <style>.schema01,.schema02{fill:#fff;stroke:#1d1d1b;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.schema02{fill:#dfdfdf}.st2{font-family:&apos;MyriadPro-Regular&apos;}.schema03{font-family:arial;font-size:6px}</style>
                        <g id="Large_grp"><g id="large"><path class="schema01" d="M.5 278.5h252v269H.5z"/><path class="schema02" d="M.5 278.5h252v10.3H.5z"/><text transform="translate(110.926 285.517)" class="st2 schema03">large-projet</text></g><g id="pr-wide"><path class="schema01" d="M12.5 499.8H241v35.7H12.5z"/><path class="schema02" d="M12.5 499.8H241v10.3H12.5z"/><text transform="translate(116.36 506.772)" class="st2 schema03">pr-wide</text></g><g id="pr-large"><path class="schema01" d="M12.5 455.8H241v35.7H12.5z"/><path class="schema02" d="M12.5 455.8H241v10.3H12.5z"/><text transform="translate(116.136 462.772)" class="st2 schema03">pr-large</text></g><g id="large-sipaui"><path class="schema01" d="M12.5 317H241v130.1H12.5z"/><path class="schema02" d="M12.5 317H241v10.3H12.5z"/><text transform="translate(111.461 324.002)" class="st2 schema03">large-sipaui</text></g><g id="su-wide"><path class="schema01" d="M129.5 349h99.8v87.2h-99.8z"/><path class="schema02" d="M129.5 349h99.8v10.3h-99.8z"/><text transform="translate(168.76 356.06)" class="st2 schema03">su-wide</text><g><path class="schema02" d="M183 379.3h41.6v10.3H183z"/><text transform="translate(193.07 386.29)" class="st2 schema03">…-wide</text><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="182.235" y1="384.774" x2="225.741" y2="384.774"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="1" stop-color="#fff"/></linearGradient><path fill="url(#SVGID_1_)" d="M182.2 378.7h43.5v12.2h-43.5z"/><g><path class="schema02" d="M183 363.7h41.6V374H183z"/><text transform="translate(189.447 370.694)" class="st2 schema03">basic-wide</text></g><g><path class="schema02" d="M134 363.7h41.6V374H134z"/><text transform="translate(141.158 370.694)" class="st2 schema03">typo-wide</text><g><path class="schema02" d="M134 379.3h41.6v10.3H134z"/><text transform="translate(136.788 386.29)" class="st2 schema03">buttons-wide</text></g></g></g></g><g id="su-large"><path class="schema01" d="M24.2 349H124v87.2H24.2z"/><path class="schema02" d="M24.2 349H124v10.3H24.2z"/><text transform="translate(63.188 356.06)" class="st2 schema03">su-large</text><path class="schema02" d="M77.6 379.8h41.6v10.3H77.6z"/><text transform="translate(87.498 386.798)" class="st2 schema03">…-large</text><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="76.888" y1="385.282" x2="120.395" y2="385.282"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="1" stop-color="#fff"/></linearGradient><path fill="url(#SVGID_2_)" d="M76.9 379.2h43.5v12.2H76.9z"/><g><path class="schema02" d="M77.6 364.2h41.6v10.3H77.6z"/><text transform="translate(83.876 371.202)" class="st2 schema03">basic-large</text></g><g><path class="schema02" d="M28.7 364.2h41.6v10.3H28.7z"/><text transform="translate(35.587 371.202)" class="st2 schema03">typo-large</text><g><path class="schema02" d="M28.7 379.8h41.6v10.3H28.7z"/><text transform="translate(31.217 386.798)" class="st2 schema03">buttons-large</text></g></g><g><path class="schema02" d="M24.2 333.5h41.6v10.3H24.2z"/><text transform="translate(33.094 340.514)" class="st2 schema03">variables</text></g><g><path class="schema02" d="M12.5 300h47.6v10.3H12.5z"/><text transform="translate(15.357 307.014)" class="st2 schema03">variables-projet</text></g><g><path class="schema02" d="M82.3 333.5h41.6v10.3H82.3z"/><text transform="translate(94.448 340.514)" class="st2 schema03">mixins</text></g></g></g><g id="Default_grp"><g id="default"><path class="schema01" d="M.5.5h252v269H.5z"/><path class="schema02" d="M.5.5h252v10.3H.5z"/><text transform="translate(108.192 7.518)" class="st2 schema03">default-projet</text></g><g id="pr-small"><path class="schema01" d="M12.5 221.8H241v35.7H12.5z"/><path class="schema02" d="M12.5 221.8H241v10.3H12.5z"/><text transform="translate(115.883 228.772)" class="st2 schema03">pr-small</text></g><g id="pr-main"><path class="schema01" d="M12.5 177.8H241v35.7H12.5z"/><path class="schema02" d="M12.5 177.8H241v10.3H12.5z"/><text transform="translate(116.64 184.772)" class="st2 schema03">pr-base</text></g><g id="default-sipaui"><path class="schema01" d="M12.5 39H241v130.1H12.5z"/><path class="schema02" d="M12.5 39H241v10.3H12.5z"/><text transform="translate(108.728 46.002)" class="st2 schema03">default-sipaui</text></g><g id="su-small"><path class="schema01" d="M129.5 71h99.8v87.2h-99.8z"/><path class="schema02" d="M129.5 71h99.8v10.3h-99.8z"/><text transform="translate(168.281 78.06)" class="st2 schema03">su-small</text><g><path class="schema02" d="M183 101.3h41.6v10.3H183z"/><text transform="translate(192.591 108.29)" class="st2 schema03">…-small</text><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="182.235" y1="106.774" x2="225.741" y2="106.774"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="1" stop-color="#fff"/></linearGradient><path fill="url(#SVGID_3_)" d="M182.2 100.7h43.5v12.2h-43.5z"/><g><path class="schema02" d="M183 85.7h41.6V96H183z"/><text transform="translate(188.969 92.694)" class="st2 schema03">basic-small</text></g><g><path class="schema02" d="M134 85.7h41.6V96H134z"/><text transform="translate(140.68 92.694)" class="st2 schema03">typo-small</text><g><path class="schema02" d="M134 101.3h41.6v10.3H134z"/><text transform="translate(136.31 108.29)" class="st2 schema03">buttons-small</text></g></g></g></g><g id="su-base"><path class="schema01" d="M24.2 71H124v87.2H24.2z"/><path class="schema02" d="M24.2 71H124v10.3H24.2z"/><text transform="translate(63.188 78.06)" class="st2 schema03">su-main</text><path class="schema02" d="M77.6 116.8h41.6v10.3H77.6z"/><text transform="translate(87.498 123.798)" class="st2 schema03">…-main</text><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="76.888" y1="122.282" x2="120.395" y2="122.282"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="1" stop-color="#fff"/></linearGradient><path fill="url(#SVGID_4_)" d="M76.9 116.2h43.5v12.2H76.9z"/><path class="schema02" d="M77.6 101.2h41.6v10.3H77.6z"/><text transform="translate(83.876 108.202)" class="st2 schema03">basic-main</text><g><path class="schema02" d="M77.6 85.6h41.6v10.3H77.6z"/><text transform="translate(90.004 92.605)" class="st2 schema03">global</text></g><g><path class="schema02" d="M28.7 85.6h41.6v10.3H28.7z"/><text transform="translate(36.184 92.605)" class="st2 schema03">normalize</text><path class="schema02" d="M28.7 101.2h41.6v10.3H28.7z"/><text transform="translate(35.587 108.202)" class="st2 schema03">typo-main</text><g><path class="schema02" d="M28.7 116.8h41.6v10.3H28.7z"/><text transform="translate(31.217 123.798)" class="st2 schema03">buttons-main</text></g></g><g><path class="schema02" d="M24.2 55.5h41.6v10.3H24.2z"/><text transform="translate(33.094 62.514)" class="st2 schema03">variables</text></g><g><path class="schema02" d="M12.5 22h47.6v10.3H12.5z"/><text transform="translate(15.357 29.014)" class="st2 schema03">variables-projet</text></g><g><path class="schema02" d="M82.3 55.5h41.6v10.3H82.3z"/><text transform="translate(94.448 62.514)" class="st2 schema03">mixins</text></g></g></g>
                    </svg>
                </div>
                <p>Il y a donc 2 feuilles de styles appelées dans le <code>&lt;head&gt;</code> du site&nbsp;: <code>default-projet.css</code> et <code>large-projet.css</code>. Ces feuilles de styles importent dans l’ordre&nbsp;: les variables propres au projet (notamment pour thématiser SipaUI), SipaUI, puis les styles spécifiques au projet.</p>

                <h2>Gestion des tailles</h2>

                <p>SipaUI intègre la variable de taille de police <code>$font-size-root</code> qui règle la taille de référence à <strong>10px</strong> pour tout ce qui sera défini en <code>rem</code> (textes bien sûr, mais aussi potentiellement les marges, paddings, border-radius, width…). Cela peut permettre de gérer simplement les tailles en fonction de différentes tailles d’écran (pour afficher du contenu un peu plus gros sur grands écrans de smartphone par exemple). Du coup, <strong class="su-important">à chaque fois que l’on définit une taille</strong>, il est bon de se poser la question&nbsp;: «&nbsp;<strong class="su-important">Cette taille doit-elle être proportionnelle ou fixe&nbsp;?</strong>&nbsp;». C'est pourquoi SipaUI intègre 2 types de taille différents&nbsp;: <code>$margin-</code> (ie&nbsp;: $margin-standard) et <code>$margin-resp-</code> (ie&nbsp;: $margin-resp-standard). Cela permet de choisir des tailles en <code>px</code> ou en <code>rem</code>.</p>
            </article>

        </main>
    </body>
</html>
