<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <script type="module">
        import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.esm.js";
        Fancybox.bind('[data-fancybox="gallery"]', {});
    </script>
</head>
<body>
    <header>
        <div class="header-bg flex">
            <a href="index.php"><img class="header-logo flex" src="img/main-logo.png"></a>
        </div>
        <div class="nav-container dark-green-bg">
            <nav class="container">
                <ul class="header-ul white-text flex">
                    <li class="flex centered-text"><a class="flex" href="index.php">Accueil</a></li>
                    <li class="flex centered-text"><a class="flex" href="recyclage.php">Recyclage</a></li>
                    <li class="flex centered-text"><a class="flex" href="economie-energie.php">Économie d'énergie</a></li>
                    <li class="flex centered-text"><a class="flex" href="#">Circuit court</a></li>
                    <li class="flex centered-text"><a class="flex" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>