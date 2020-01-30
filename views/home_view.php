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
            <p><?= $lang->home->carte_resa ?></p>

            <h4><?= $lang->home->horaires ?></h4>
            <p><?= $lang->home->horairesDetails ?></p>

            <h4><?= $lang->home->paiement ?></h4>
            <p><?= $lang->home->paiementDetails ?></p>

        </section><!-- /#restaurant_description -->
        
    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>
</body>    
</html>