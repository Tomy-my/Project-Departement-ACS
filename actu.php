<?php
$titre = "Actualités";

include("header.php");
?>

<div class="actu_container">
    <div class="actu_left">
        <div class="actu_video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nORw__Fp-yc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="actu_right">
        <div class="actu_haut">
            <div class="actu_img">
                <a href="https://www.lci.fr/environnement-ecologie/video-des-images-rares-de-lynx-dans-l-hexagone-6247-2182029.html">
                    <img src="images/lynx.jpg">
                    <div class="filtre1">
                        <h1>Des images rare de Lynx au Jura !</h1>
                        <p>
                        <i class="far fa-user"></i>&ensp;By TFI&emsp;&emsp;<i class="far fa-heart"></i>&ensp;371 
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="actu_bas">
                <div class="actu_bas1">
                    <a href="https://www.ledauphine.com/magazine-tourisme-et-patrimoine/2020/09/07/baume-les-messieurs-le-bijou-du-jura">
                        <img src="images/lieux/baume.jpg">
                        <div class="filtre">
                            <h1>Baume les Messieurs</h1>
                            <p>
                            <i class="far fa-user"></i>&ensp;By Jeanne PALAY&emsp;&emsp;<i class="far fa-heart"></i>&ensp;138 
                            </p>
                        </div>
                    </a>
                </div>
            <div class="actu_bas2">
                <a href="https://france3-regions.francetvinfo.fr/bourgogne-franche-comte/jura/haut-jura/nature-venu-des-alpes-un-jeune-gypaete-barbu-survole-pour-la-premiere-fois-le-massif-du-jura-2031907.html">
                    <img src="images/oiseau.jpg">
                    <div class="filtre">
                        <h1>Un Gypaète Barbu aperçu </h1>
                        <p>
                        <i class="far fa-user"></i>&ensp;By Sophie COURAGEOT&emsp;&emsp;<i class="far fa-heart"></i>&ensp;337 
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>