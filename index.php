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

<div id="footer">
    <div class="haut_footer">
        <div class="left_footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 249.72 97.45"><defs><style>.cls-1{fill:#969696;}.cls-2{fill:#72817c;}.cls-3{fill:#414846;}.cls-4{fill:#4e685c;}.cls-5{fill:#828e8a;}.cls-6{fill:#6c7f78;}.cls-7{fill:#869ba5;}.cls-8{fill:#a9bcc4;}.cls-9{fill:#424846;}.cls-10{fill:#818483;}.cls-11{fill:#525b58;}</style></defs><title>Jura</title><g id="Calque_1" data-name="Calque 1"><path class="cls-1" d="M250,100.45c-3.83-2.69-14.37-9.93-18.94-11.48S216,68.37,215.87,67.24l-6.9.24-4.84-9.12L198.61,57l-3.45-6.3-2.76.7s-6.22-5.61-8.29-11.22-9.67-11.21-9.67-11.21-5.52,11.21-7.59,13.32l-2.07-2.81s-8.29,16.82-15.19,21.73-15.88,14-15.88,14-5.29.31-6.22,1.41c-4.14,4.9-9.66,10.51-9.66,10.51s-1.49-4.47-2.76-3.51C108,89,98.88,98,96.39,100.45Z" transform="translate(-0.28 -3)"/><path class="cls-2" d="M94.74,97,76.06,69.23l7.59-2.11,6.91-7,6.21,1.4,7.59-16.82h5.53s1.38-11.21,5.52-17.52l1.38,3.5,5.53-11.21,4.14-1.4s4.14-8.41,6.9-12.62,2.16-.87,2.16-.87c-.86-1.73,5.31,9,7.51,10,0,0,4.83.7,6.9,4.91s3.46,11.21,3.46,11.21l3.45-1.4L159.6,37l3.45-2.8L170,53.81,118.9,95.9Z" transform="translate(-0.28 -3)"/><path class="cls-3" d="M113,100l13.15-7.79L122,89.46l10.36-20.32-2.08-4.21c3.46-2.8,4.15-10.51,4.15-10.51-3.46-1.4-2.77-4.2-2.77-4.2-1.38-6.31.7-13.32.7-13.32-3.46-1.4-3.46-3.5-3.46-3.5a62.42,62.42,0,0,0,3.46-7c3.13-3.18,3-19.63,2.79-23.26-.31.42-.84,1.19-1.76,2.59-2.76,4.2-6.9,12.61-6.9,12.61l-4.15,1.4-5.52,10.51-1.38-2.8C111.25,33.75,109.87,45,109.87,45h-5.53L96.75,61.78l-6.22-1.4-6.9,7L76,69.49l11.17,18C92.79,90,113,100,113,100Z" transform="translate(-0.28 -3)"/><path class="cls-4" d="M126.8,45.05c0-.35-1.72,9.11-1.72,9.11l2.41,3.5-3,12.1a7.7,7.7,0,0,0-.12,3.17l2.14,12.42-16.92,9.11-11-10.87L100.07,77a7.64,7.64,0,0,1,4.09-5.12l4-1.93V58l5.53-5.6-3.46,7,3.11,12.26-1.29,3.92a.38.38,0,0,0,.6.41L114,74.8A8.5,8.5,0,0,0,116.69,67l-.93-5.52s3.79-9.46,3.45-10.51-2.42-7.71-2.42-7.71l3.8,6.3-.69,9.12,1,4.65a.75.75,0,0,0,1.39.21l2.83-5.22-1.73-7Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M99.32,100.45,114,95.86l-6.9-10.51h-3.46S101.6,79,95.39,76.94a10.57,10.57,0,0,1-6.91-8.41L83,55.91l-.69,7.71L78.13,48.9,68.46,35.59,64.32,44l-1.38-2.1-2.07,4.2s1.38,3.5-4.84,8.41a18.18,18.18,0,0,0-6.9,11.21H45.68s2.07,9.11-5.53,10.52-7.59,3.5-7.59,3.5L28.42,79a25.57,25.57,0,0,1-11,7C11.62,87.8,3,97.31.28,100.45Z" transform="translate(-0.28 -3)"/><path class="cls-6" d="M110.43,100.45l-4.05-6.69s-4,1.43-6-2-1.5-4.56-1.5-4.56-5,1.9-7-4-1-8.56-1-8.56a12.84,12.84,0,0,0-2,6.85,23,23,0,0,0,.5,4l-3-5.71c-.25-1.13-.11-6-1.5-12l-3-6.28L83.11,70a13.74,13.74,0,0,1,0,3.68c-.19,1.58-.48,3.86-.78,5.54l-1.52-2.74a13.85,13.85,0,0,1-1.67-7.72l.19-2.67-2,5.71c-.5,1.52.69,5.26,1,6.85l.5,4.56s1,7.14-6.49,4.57c-5-1.71-6.8,1-6.5,3.42.5,4-1.77,4.52-5.49,5.71a32.85,32.85,0,0,0-7,3.55Z" transform="translate(-0.28 -3)"/><path class="cls-7" d="M120.93,37.16s-1-6.65,1.73-11.56l-5,2.92,4.66-9,3.79-1.75S131,7.91,135.09,3a78.85,78.85,0,0,1,0,13.55c-.69,6.07-1.38,7.94-1.38,7.94s-2.5,7.68-4.75,9.43l-3.8,2.37c-2.15,1.93-1.84,4.45-1.64,6.48Z" transform="translate(-0.28 -3)"/><path class="cls-7" d="M115.39,27.44s-2.57,2.72-4.12,8.67a55.82,55.82,0,0,0-1.55,12.27s1.89-8.23,3.62-11.39c.86-1.58,2.36-4.85,2.36-4.85Z" transform="translate(-0.28 -3)"/><path class="cls-8" d="M143,14.56c-2.07-.7-7.51-11-7.51-11L135.09,3s.52,10.89,0,13.55-2,11.07-3.63,13.61-2.5,3.76-2.5,3.76.82,2.89,3.35,3l2.52.09a3.42,3.42,0,0,1,1.29,3,7.64,7.64,0,0,0,.26,2.71s1.56-3.94,1.47-6.22a5.63,5.63,0,0,0-1.12-3.41s2.85,1.49,3.19,2.8a17.89,17.89,0,0,1,.26,3.86,39.94,39.94,0,0,0,2-6.75c.17-2-2.77-2.45-2.85-3.68a5.81,5.81,0,0,1,.26-2.19L143.81,31l.86,5.78-1.47,3.94,3.54-4-.35-4.56,1.9,3.42,1.64,7.88.18-9-4.06-10.6,1.21-3.68,2.85,9.29,3.36,6.83s-.08,7,0,7.1,2.5-9.2,2.5-9.2l-2.58-3.42s-1.39-7-3.46-11.21S143,14.56,143,14.56Z" transform="translate(-0.28 -3)"/><polygon class="cls-8" points="139.29 41.35 136.88 46.25 142.75 52.21 141.71 58.52 145.16 49.41 138.95 45.2 139.29 41.35"/><polygon class="cls-8" points="144.13 40.3 145.16 44.5 149.31 46.25 149.31 49.41 151.38 43.8 146.2 42.4 144.13 40.3"/><path class="cls-9" d="M151.66,70.28,159.25,64s-1.38-3.5.69-8.41l2.08-4.9,2.07-2.81s-6.91,8.41-7.6,11.92-4.14,6.3-6.9,7a4.65,4.65,0,0,0-2.19,1.7,27.26,27.26,0,0,0-3.34,6l4.15-3.5.69,12.61Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M159.25,64s.69,3.51,4.15,2.8,2.07,5.61,2.07,5.61.69-3.5-5.53-3.5h-6.21Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M151.66,70.28s-1.38,6.31,3.45,7.71,7.6,0,7.6,0-4.84,4.2-8.29,3.5a5.76,5.76,0,0,0-5.52,2.1Z" transform="translate(-0.28 -3)"/><path class="cls-10" d="M226.46,100.45l-2.15-2.77a6.77,6.77,0,0,1-3.91-4.87c-.71-3.65-2.14-8.52-2.14-8.52v5.48s-2.13,8.52-5,3.65-11.75-21.91-11.75-21.91S209,91.59,205.8,91,199,77,199,77s0,7.91-1.42,6.08-3.92-17-3.92-17l1.07,14-2.85-6.69-.71-12.17L189,75.77l-1.47-3-.22,5.48a12.22,12.22,0,0,1-6,8.52l-4.39,1.42a18.93,18.93,0,0,1-.59,7.1c-.69,2.35-3.14,4.19-4.81,5.2Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M204.13,58.36s-1.38,3.51-3.45,4.21a50.2,50.2,0,0,1,4.14,4.91c2.07,2.8,4.84,7.7,4.84,7.7l-.69-7.7S206.89,61.17,204.13,58.36Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M175.82,37.34A18,18,0,0,1,179.28,43c1.38,3.5,2.07,5.6,2.07,5.6s-.69-8.41-2.76-11.91-3.46-4.21-3.46-4.21Z" transform="translate(-0.28 -3)"/><path class="cls-5" d="M137.33,100.1c.28-1.51.91-4.29,1.9-5.29l8.29-2.11c4.83-3.5,5.52-4.9,5.52-4.9a27,27,0,0,1-9,2.1,56.93,56.93,0,0,1-8.28-.7l-5.69,10.9Z" transform="translate(-0.28 -3)"/><path class="cls-4" d="M203,100.45a6.54,6.54,0,0,0-2.83-.57c-1,.23-4.44-.93-4.44-.93l-.35-.69a7.47,7.47,0,0,1-2.05.11c-.91-.11-.46-3.12-1.14-3s-.8,2.67-1.6,2.78-1.14-1.27-1.71-1.39-1,1.86-1.82,2-1.6-1.5-2-1.5-.92,2-1.37,1.73-.91-5.21-1.6-5.32-.91,3.93-1.59,3.59-.35-5.33-.8-5.33-.69,2.55-.8,3.47S178.14,97,177.46,97s-1.48-9-2.05-9.25-.57,8.33-1.37,8.33-.69-9.38-1.6-9.38-1.37,9.49-2.05,9.73S169.25,91,168.68,91s-.34,5.78-1.26,5.78-1-5.55-1.82-5.44-.91,5.91-2.39,6.14-1.32-2.26-2-2.09-.68,3.48-1.37,3.3-.68-1.56-1.2-.69-2.9,1.74-4.79,1.39-3.25-1.74-5-1.91S145,99.53,145,99.53l-1.45.92Z" transform="translate(-0.28 -3)"/><path class="cls-11" d="M129.79,100.45l6-11.25c4.14-2.1,13.12-5.61,13.12-5.61l2.76-13.31L159,64.2s1.62-4.43,3.69-8.64,9.66-8.41,9.66-8.41a66.17,66.17,0,0,1,3.45-9.81l-1.38-8.41s-5.52,11.21-7.59,13.32l-2.07-2.81s-8.29,16.82-15.19,21.73-15.88,14-15.88,14-5.29.31-6.22,1.41c-4.14,4.9-9.66,10.51-9.66,10.51s-1.49-4.47-2.76-3.51C108,89,98.88,98,96.39,100.45Z" transform="translate(-0.28 -3)"/><path class="cls-9" d="M129.91,100.45l5.87-11.25c-15.19,9.81-5.52-1.4-5.52-1.4l8.28-9.11s-9.67,4.9-13.12,8.41a31.74,31.74,0,0,1-4.53,4,.14.14,0,0,1-.21-.16c.34-1.26,1.6-5.58,3.36-7.37l-9,9.11c-4.15,4.21-8.06,4.68-8.06,4.68l7.37-8.18s-5.53,4.21-9,7a60.16,60.16,0,0,0-4.68,4.24Z" transform="translate(-0.28 -3)"/><path class="cls-10" d="M51.94,100.45l3.75-6.34L55,89.9s-3.45,4.21-8.29,4.91a14.11,14.11,0,0,1-9-2.11c2.76-2.1,8.28-1.4,11.73-3.5s2.08-9.81,2.08-9.81a10.73,10.73,0,0,1-5.53,6c-4.14,1.75-6.9,1.05-15.53,3.85-7.23,2.35-13.24,9.11-15,11.25Z" transform="translate(-0.28 -3)"/><path class="cls-4" d="M16.05,100.45C19.81,96.2,26.3,90.12,32.21,89.2c9-1.4,17.95-3.5,19.34-9.81l.69-7.71L55,66.07l1.38,4.21S58.45,58.36,60.52,57l1.38,2.11s2.76-4.91,1.38-7.71c0,0,6.91-2.81,6.22-7.71-.5-3.56-1-6.37-1.24-7.65l-3.94,8-1.38-2.1-2.07,4.2s1.38,3.5-4.84,8.41a18.18,18.18,0,0,0-6.9,11.21H45.68s2.07,9.11-5.53,10.52-7.59,3.5-7.59,3.5L28.42,79a25.57,25.57,0,0,1-11,7C11.62,87.8,3,97.31.28,100.45Z" transform="translate(-0.28 -3)"/></g><g id="Calque_2" data-name="Calque 2"><path class="cls-3" d="M202.36,13.45c-2.57,2.13-5.15,4.4-7.73,6.68L192,22.47c-3.5,3.09-6.06,4.74-8.45,5.36a8,8,0,0,1-8.33-2.54,4.42,4.42,0,0,1-1.18-4.6,2.6,2.6,0,0,1,3.73.44c.8.91.95,2,.7,3.66l-.25,1.74-.44-.15-.12-.27.3-.19c1.22-.07,2.68-1.06,4.77-2.89,2.52-2.23,7-6.39,15.62-14.17Zm-6-6.8,7.73,8.78-1.37,1.2L198.89,13l-.9-1-3-4.17Z" transform="translate(-0.28 -3)"/><path class="cls-3" d="M202.58,39.06c-1.59,1.4-1.63,2.38-.84,3.28s3.07,1.42,4.83,1.26l.89,1-1.68,1.49-1.53-1.73,1.48.2c-3.38.75-6.26.17-8.18-2s-2.1-4.86,1.31-7.78l6.95-5.95-.07,1.56-1.57-2.81,1.07-.95,5.48,4.74.09.65-3.72,3Zm-1,7.85,2.82-2.86,8.44-7.27-.09,1.57-1.5-2.73,1-.87,5.46,4.52.09.66L214.09,43l-8.47,7.47,0-3.16,2.13,3.71-1.19,1Z" transform="translate(-0.28 -3)"/><path class="cls-3" d="M213.87,57.91,216.6,60l2.45,2.77,1.71,3-1.18,1L212.68,59Zm5.48-2.18,1.49-1.32c1.41-1.24,1.9-1.72,2.87-2.67l-1.19-1.82,1-.88,6.28,3.72.13.69-2.92,3-3.95,3.48c-1.59,1.4-4.19,3.74-5.29,4.8l-3.85-4.36C215.12,59.41,217.77,57.12,219.35,55.73Zm5.36-.72,1.74,2-1,.26c3.53-2.29,6.71-1.82,8.1-.25a2.89,2.89,0,0,1,.14,4c-1.38,1.12-2.81,1-3.73,0a3.31,3.31,0,0,1-.62-3.08l.29-1.63.57,1.4a8.16,8.16,0,0,0-5.51.87l-1.53-2.1Z" transform="translate(-0.28 -3)"/><path class="cls-3" d="M240.17,75.84c1.27.81,3.4,2.27,4.78,3.26l-1.07.94a32.79,32.79,0,0,0-4-2.55,3.68,3.68,0,0,0-4.28.28c-1.28,1.12-1.26,2.34-.47,3.23a4.06,4.06,0,0,0,2.35,1.06l1.7.38L239,83,236.86,83c-2.43-.13-4-.25-5.63-2.17s-1.89-4.49.21-6.34C233.25,72.86,235.45,72.77,240.17,75.84Zm-3.25,6.42,6.39-5.62c2.26-2,2.53-3,1-4.72a12.9,12.9,0,0,0-2.54-2.15l2.6,1-1.94,1.36c-1.76,1.43-3.19,1.18-4.09.16a2.18,2.18,0,0,1-.29-2.9c2.25-1.73,5.56-.87,8.91,2.93,3,3.39,2.78,5.94-.64,9l-5.72,5c-.51.45-.56.88-.22,1.26s.57.37,1.26.3l.17,1.1c-1.95.59-3.31.12-4.73-1.48C235.54,85.64,235.58,83.85,236.92,82.26Z" transform="translate(-0.28 -3)"/></g></svg>
            <p>
                Projet <span>ACS</span>, choix du département, création d'une maquette et intégration de la maquette en site web.
                <br>(Projet solo) 
            </p>
            <div class="social">
            <a href="https://github.com/Tomy-my"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/_dakor/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="right_footer">
            <div class="menuL">
                <a href="#"><h1>Lieux</h1></a>
                <p>
                    Les lieux incontournable du Jura !
                </p>
            </div>
            <div class="menuA">
                <a href="#"><h1>Actualités</h1></a>
                <p>
                    Retrouve les actualités du Jura 
                </p>
            </div>
            <div class="menuM">
                <a href="#"><h1>Marchés & Foires</h1></a>
                <p>
                    Les marchés et foires du Jura 
                </p>
            </div>
        </div>
    </div>
    <div class="bas_footer">
            <p>© 2021 Copyright : JuraTomy</p>
    </div>
</div>


















































<script>
        /* FadeIn Scroll */
$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.geo_left').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
          

            var top_of_object = $(this).position().top - ($(this).outerHeight() - 900);
          console.log(top_of_object);
          console.log(bottom_of_window);

          
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= (top_of_object) ){
                
                $(this).animate({'opacity':'1'},1700);
                    
            }
            
        }); 
    
    });
    
});
    </script>

    <script>
        var smoothScroll = {
    speed: 0,
    delay: 10, // en ms
    timer: null,
    scrollSpeed: 120,
    inertia: 0.93,
    init: function(){
        this.setEventsListeners();
    },

    setEventsListeners: function(){
        var me = this;
        $(document).bind('DOMMouseScroll mousewheel', function(e){
            me.setSpeed(e.originalEvent);
        });
	 },

    setSpeed: function(e){
        var direction = e.detail ? -e.detail : e.wheelDelta;
    	this.speed += direction < 0 ? -this.scrollSpeed : this.scrollSpeed;
    	if(this.timer == null){
    		this.timer = setTimeout(this.smoothScroll, this.delay, this); 
    	}
    	e.preventDefault();
    },
    
    smoothScroll: function(scope){
		var self = scope;
    	self.speed *= self.inertia;

        var currScrollTop = $(window).scrollTop();
        $(window).scrollTop(currScrollTop-self.speed);

    	if(self.speed < self.inertia && self.speed > -self.inertia){
    		self.speed = 0;
    		clearTimeout(self.timer);
    		self.timer = null;
    	}else{
    		self.timer = setTimeout(self.smoothScroll, self.delay, self);
    	}
    }
}

smoothScroll.init();
    </script>