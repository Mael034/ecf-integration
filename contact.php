<?php
    require_once "_header.php";
?>
<main class="flex">
    <div class="container">
        <article>
            <h1 class="article-h1 green-text">Contact :</h1>
            <form class="contact-form flex black-text" action="#" method="get">
                <label for="firstname">Votre prenom:</label>
                <input type="text" name="firstname" placeholder="Prenom">
                <label for="lastname">Votre nom:</label>
                <input type="text" name="lastname" placeholder="Nom">
                <label for="email">Votre email:</label>
                <input type="text" name="email" placeholder="Email">
                <label for="comment">Votre message:</label>
                <textarea type="text" name="comment">Message</textarea>
                <input type="submit" id="submit-button">
            </form>
        </article>
        <?php
            require_once "_aside.php";
        ?>
    </div>
</main>
<?php
    require_once "_footer.php";
?>