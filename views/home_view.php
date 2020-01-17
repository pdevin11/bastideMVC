<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <div class="container">
    <!-- Header : menu principal -->

        <?php include_once 'includes/header.php'; ?>

    <!-- Image -->

        <img src="assets/images/bandeauLogo.png" alt="bastide" id="main-image" />

    <!-- Description du restaurant -->

        <section id="restaurant_description">
            <h1>Restaurant La Bastide</h1>
            <p><?= $lang->home->presentation ?></p>

            <h4><?= $lang->home->horaires ?></h4>
            <p><?= $lang->home->horairesDetails ?></p>

            <h4><?= $lang->home->paiement ?></h4>
            <p><?= $lang->home->paiementDetails ?></p>

        </section><!-- /#restaurant_description -->

    <!-- Images cliquables -->

        <div class="menu_frame">
            <a href="index.php?page=actualite" class="links">
                <div id="actu" class="div_fade">
                    <p id="actu_link"><?= $lang->home->actualites ?></p>
                </div><!-- /#actu -->
            </a><!-- /.links -->

            <a href="index.php?page=carte" class="links">
                <div id="carte" class="div_fade">
                    <p id="carte_link"><?= $lang->home->carte ?></p>
                </div><!-- /#carte -->
            </a><!-- /.links -->

            <a href="index.php?page=contact" class="links">
                <div id="contact" class="div_fade">
                    <p id="contact_link"><?= $lang->home->contact ?></p>
                </div><!-- /#contact -->
            </a><!-- /.links -->

        </div><!-- /.menu_frame -->
    
    <!-- carousel des avis -->

        <!-- code dans le fichier script nommé carrousselHome.php à retranscrire apres création des classes et du controller -->
        
        
    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>
</body>    
</html>