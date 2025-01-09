<?php
    require_once "_header.php";
?>
<main class="flex">
    <div class="container">
        <article class="flex">
            <h1 class="green-text article-h1">Le recyclage:</h1>
            <p class="main-p black-text">
                Le recyclage est un procédé de traitement des déchets (industriels ou ménagers) de produits arrivés en fin de vie, qui permet de réintroduire certains de leurs matériaux dans la production de nouveaux produits. Les matériaux recyclables comprennent des métaux, plastiques et cartons, le verre, les gravats, etc. Un exemple de ce procédé est la fabrication de bouteilles neuves avec le verre de bouteilles usagées, même si elle est considérablement moins efficace énergétiquement que le système des consignes.
            </p>
            <p class="main-p black-text">
                Le recyclage a deux conséquences environnementales majeures :
            </p>
            <ul class="p-ul">
                <li>
                    <p class="main-p black-text">
                        la réduction du volume de déchets, donc de la pollution qu'ils causeraient (certains matériaux mettent des décennies, voire des siècles, à se dégrader).
                    </p>
                </li>
                <li>
                    <p class="main-p black-text">
                        la préservation des ressources naturelles, puisque la matière recyclée est utilisée à la place de celle qu'on aurait dû extraire.
                    </p>
                </li>
            </ul>
            <p class="main-p black-text">
                Il représente une des activités économiques de la société de consommation. Certains procédés sont simples et bon marché, tandis que d'autres sont complexes et peu rentables. Dans ce domaine, les objectifs de l'écologie et ceux du commerce peuvent ainsi se rejoindre ou diverger ; la législation peut alors imposer la prise en charge de cette externalité. Ainsi, en particulier depuis les années 1970, le recyclage est une activité importante de l'économie et des conditions de vie des pays développés.
            </p>
            <p class="main-p black-text">
                (cf:<a class="stylised-link" href="https://fr.wikipedia.org/wiki/Responsabilit%C3%A9_environnementale">Wikipédia</a>)
            </p>
            <div class="img-container flex">
                <a data-fancybox="gallery" href="img/recyclage.jpg"> 
                    <img class="fancy-img" id="recyclage-img" src="img/recyclage.jpg" alt="Bloc compacté de plastique prêt à être recyclé"/>
                </a>
                <a data-fancybox="gallery" href="img/Centre_recyclage_de_la_Maix.webp"> 
                    <img class="fancy-img" src="img/Centre_recyclage_de_la_Maix.webp" alt="Centre de tri"/>
                </a>
                <a data-fancybox="gallery" href="img/1200x680_34847_large.webp"> 
                    <img class="fancy-img" src="img/1200x680_34847_large.webp" alt="Ligne production dans un centre de tri"/>
                </a>
            </div>
        </article>
        <?php
            require "_aside.php";
        ?>
    </div>
</main>
<?php
    require_once "_footer.php";
?>