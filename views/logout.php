<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Déconnexion</title>
        <!--Inclusion du contenu du fichier header.php-->
    <?php
    include VIEWS_DIR . '/partials/header.php';
    ?>
</head>
<body>

    <!--Inclusion du menu-->
    <?php
    include VIEWS_DIR . '/partials/menu.php';
    ?>

    <!-- Grille Bootstrap avec le contenu principal de la page -->
    <div class="container">

        <!-- Titre h1 -->
        <div class="row my-5">
            <div class="col-12">
                <h1 class=text-center>Déconnexion</h1>
            </div>
        </div>

        <!-- Contenu -->
        <div class="row">

            <div class="alert alert-warning text-center fw-bold">Vous avez bien été déconnecté de votre compte !</div>
        </div>


        <!--Inclusion du contenu du fichier footer.php-->
    <?php
    include VIEWS_DIR . '/partials/footer.php'
    ?>

</body>
</html>