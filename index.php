<?php 
$titre = "Home"; 

include("header.php"); 
?>

<style>
body{        
    background-image: url('./images/1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

</style>

<div id="home">
    <div class="home_titre">
        <h2>Bienvenue au<br></h2>
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 28.21"><defs><style>.cls-12{fill:#ffffff;}</style></defs><title></title><path class="cls-12" d="M14.67,5.09c-.11,3.34-.11,6.77-.11,10.22v3.54c0,4.67-.44,7.68-1.54,9.88A7.89,7.89,0,0,1,5.69,33.3,4.39,4.39,0,0,1,1.5,31.16a2.59,2.59,0,0,1,2.77-2.52c1.19,0,2.1.62,3.17,1.9l1.13,1.34-.41.22L7.89,32l.05-.34c.75-1,1-2.71,1-5.49,0-3.37-.15-9.5-.29-21.09Zm-9,0H17.27V6.92l-5.18.51H10.74l-5-.51Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M33.81,21.85c0,2.12.71,2.81,1.89,2.81,1.37,0,3.06-1.37,4.1-2.8h1.33v2.25H38.85l1.12-1c-1.66,3-4,4.81-6.84,4.81s-5-1.63-4.92-6.12l.13-9.14,1.11,1.08-3.11-.68V11.65l7.1-1L34,11l-.18,4.81ZM39,27.8l-.29-4,.13-11.15,1.11,1.11-3-.68V11.77l6.93-1.1.55.36-.11,4.81V27.13L42,25l4.15.85v1.58Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M57.15,20.29v-2c0-1.87,0-2.56-.11-3.92l-2.13-.3V12.74l6.87-2.26.6.36L62.7,15v5.27c0,2.11,0,5.61.1,7.14H57C57.11,25.9,57.15,22.4,57.15,20.29Zm-2,5.56,3.33-.68h3.66l3.32.68v1.58H55.19Zm4.93-10h2.61l-.46.92c.61-4.17,3-6.24,5.11-6.24a2.86,2.86,0,0,1,3,2.5c-.07,1.77-1.07,2.78-2.47,2.78a3.29,3.29,0,0,1-2.69-1.58l-1-1.29,1.4.49a8.25,8.25,0,0,0-2.95,4.72l-2.56-.25Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M85.69,18c1.44-.42,3.91-1.05,5.55-1.43V18a31.59,31.59,0,0,0-4.54,1.36,3.66,3.66,0,0,0-2.6,3.39c0,1.71.91,2.49,2.09,2.49a4,4,0,0,0,2.32-1.06l1.4-1,.36.5-1.46,1.55c-1.68,1.74-2.77,2.79-5.29,2.79-2.69,0-4.57-1.55-4.57-4.34C79,21.18,80.33,19.48,85.69,18Zm2.65,6.68V16.13c0-3-.6-3.9-2.82-3.9a12.32,12.32,0,0,0-3.26.49l2.4-1.32-.25,2.35c-.09,2.27-1.22,3.18-2.56,3.18a2.17,2.17,0,0,1-2.34-1.71c.18-2.82,3-4.74,8-4.74,4.46,0,6.23,1.84,6.23,6.4V24.5c0,.67.28,1,.78,1s.65-.18,1.06-.74l.92.6a4,4,0,0,1-4.19,2.57C89.94,27.92,88.64,26.7,88.34,24.64Z" transform="translate(-1.5 -5.09)"/></svg>
    </div>
    <div class="descendre">
        <a href="#ancre"> <i class="fas fa-arrow-down"></i> </a>
    </div>
</div>

<hr class="entre_sect">

<!-- ----------------------------------------------GEO---------------------------------------------- -->

<hr id="ancre">
<div id="geo">
    <div class="geo_left">
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 28.21"><defs><style>.cls-12{fill:#ffffff;}</style></defs><title></title><path class="cls-12" d="M14.67,5.09c-.11,3.34-.11,6.77-.11,10.22v3.54c0,4.67-.44,7.68-1.54,9.88A7.89,7.89,0,0,1,5.69,33.3,4.39,4.39,0,0,1,1.5,31.16a2.59,2.59,0,0,1,2.77-2.52c1.19,0,2.1.62,3.17,1.9l1.13,1.34-.41.22L7.89,32l.05-.34c.75-1,1-2.71,1-5.49,0-3.37-.15-9.5-.29-21.09Zm-9,0H17.27V6.92l-5.18.51H10.74l-5-.51Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M33.81,21.85c0,2.12.71,2.81,1.89,2.81,1.37,0,3.06-1.37,4.1-2.8h1.33v2.25H38.85l1.12-1c-1.66,3-4,4.81-6.84,4.81s-5-1.63-4.92-6.12l.13-9.14,1.11,1.08-3.11-.68V11.65l7.1-1L34,11l-.18,4.81ZM39,27.8l-.29-4,.13-11.15,1.11,1.11-3-.68V11.77l6.93-1.1.55.36-.11,4.81V27.13L42,25l4.15.85v1.58Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M57.15,20.29v-2c0-1.87,0-2.56-.11-3.92l-2.13-.3V12.74l6.87-2.26.6.36L62.7,15v5.27c0,2.11,0,5.61.1,7.14H57C57.11,25.9,57.15,22.4,57.15,20.29Zm-2,5.56,3.33-.68h3.66l3.32.68v1.58H55.19Zm4.93-10h2.61l-.46.92c.61-4.17,3-6.24,5.11-6.24a2.86,2.86,0,0,1,3,2.5c-.07,1.77-1.07,2.78-2.47,2.78a3.29,3.29,0,0,1-2.69-1.58l-1-1.29,1.4.49a8.25,8.25,0,0,0-2.95,4.72l-2.56-.25Z" transform="translate(-1.5 -5.09)"/><path class="cls-12" d="M85.69,18c1.44-.42,3.91-1.05,5.55-1.43V18a31.59,31.59,0,0,0-4.54,1.36,3.66,3.66,0,0,0-2.6,3.39c0,1.71.91,2.49,2.09,2.49a4,4,0,0,0,2.32-1.06l1.4-1,.36.5-1.46,1.55c-1.68,1.74-2.77,2.79-5.29,2.79-2.69,0-4.57-1.55-4.57-4.34C79,21.18,80.33,19.48,85.69,18Zm2.65,6.68V16.13c0-3-.6-3.9-2.82-3.9a12.32,12.32,0,0,0-3.26.49l2.4-1.32-.25,2.35c-.09,2.27-1.22,3.18-2.56,3.18a2.17,2.17,0,0,1-2.34-1.71c.18-2.82,3-4.74,8-4.74,4.46,0,6.23,1.84,6.23,6.4V24.5c0,.67.28,1,.78,1s.65-.18,1.06-.74l.92.6a4,4,0,0,1-4.19,2.57C89.94,27.92,88.64,26.7,88.34,24.64Z" transform="translate(-1.5 -5.09)"/></svg>
        <p>
            Le Jura, en Bourgogne-Franche-Comté, est une destination touristique 4 saisons 
            à la fois unique et multiple. Elle offre une diversité de paysages, d'ambiances 
            et de cultures qui en font une destination riche, pleine de ressources et de découvertes 
            inattendues.
            <br><br>
            D'Ouest en Est, des espaces variés s'étagent successivement, tel un escalier, de la plaine doloise et bressane aux Montagnes du Jura, en passant par le vignoble, le Pays des Lacs et la Petite Montagne. Tantôt ville, tantôt campagne, reculées secrètes ou grands sites, vous saurez y trouver les vacances qui vous ressemblent !
        </p>
    </div>
    <div class="geo_right">
        <img src="images/juraa.png">
    </div>
</div>

<!-- ----------------------------------------------4 saisons---------------------------------------------- -->

<div class="saisons">
    <div class="container_saisons">
        <div class="s1">
            <img src="./images/ete.jpg">
            <div class="sous_s1">
                <h1>Été</h1>
                <p>
                    Pour ceux à qui la baignade et le farniente ne suffisent pas, les plans d’eau jurassiens 
                    regorgent d’activités nautiques accessibles à tous.
                    <br>
                    Balades en pédalo, kayak, canoë et pourquoi pas, stand up paddle : découvrez les lacs à votre rythme, au fil de l’eau. 
                    <br>
                    Croisières commentées à bord du Louisiane, plaisance et bateaux électriques sans permis : 
                    <br>chacun y trouvera son bonheur en fonction de ses affinités.
                </p>
            </div>
        </div>
        <div class="s2">
            <img src="./images/automne.jpg">
            <div class="sous_s2">
                <h1>Automne</h1>
                <p>
                    Comme dans le Nord de l’Amérique, l’été indien se vit aussi dans le Jura.
                    <br> 
                    Avec, d’un côté, les grands espaces sauvages et colorés de la Région
                    <br>des Lacs et du Haut-Jura ; d’un autre côté, le Vignoble qui s’anime à l’occasion des vendanges 
                    des  villes et villages de caractère pour de belles balades, et une multitude de 
                    flâneries gustatives. 
                </p>
            </div>
        </div>
        <div class="s3">
            <img src="./images/hiver.jpg">
            <div class="sous_s3">
                <h1>Hiver</h1>
                <p>
                    C’est la destination de vacances idéale pour goûter aux plaisirs de l’hiver. 
                    <br>S’adonner aux joies de la glisse, parcourir les doux reliefs et profiter des grands espaces 
                    <br>(un des plus vastes domaines nordiques d’Europe !)
                    <br>Le tout dans une montagne accessible et vivante.
                </p>
            </div>
        </div>
        <div class="s4">
             <img src="./images/printemps.jpg">
            <div class="sous_s4">
                <h1>Printemps</h1>
                <p>
                    Le printemps dans le Jura c’est la saison rêvée pour s’immerger au cœur de la Nature.
                    <br>
                    Prairies fleuries en plaine et en montagne, bourgeons au bout des sarments de vignes, 
                    cascades et rivières abondantes, faune et flore sauvage en éveil…
                    Le Jura se laisse contempler et explorer à votre gré. A pied, à cheval, ou à vélo, 
                    retrouvez nos idées de balades pour faire le plein de nature et de vitalité !</p>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>