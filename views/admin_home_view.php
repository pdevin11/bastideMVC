<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'includes/adminHead.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <div class="container">

    <h1 class="admin_h1">Panneau d'administration</h1>

    <!-- Header : menu principal -->

        <?php include_once 'includes/adminHeader.php'; ?>

        <strong><p>Mettre toutes les démarches pour les modifications. des rappels brefs ici et des liens pour télécharger les pdf qui seront détaillés avec des screens</p></strong>


        <div id="site_description">
            <p>Bienvenue sur l'espace administration du site du restaurant La Bastide.</p>
            <p>Toutes les pages modifiables sont disponnible dans le menu horizontal ci-dessus. Vous pouvez accéder à la modification de la carte en ajoutant ou en supprimant un menu, un plat.<br>
            Vous pouvez également ajouter de nouvelles actualités ou en supprimer, de même pour la galerie.<br>
            Quant au livre d'or, vous avez la possibilité de modérer chaque avis publié par un utilisateur avant sa publication.</p>
            <p>En cas de soucis avec une fonctionnalité du site, les coordonnées du développeur sont disponnible en bas de chaque page.</p>
            <p>Un lien vers chaque page concernée par les modifications que vous effectuez se trouve en bas du menu latéral situé à gauche de la page afin de vous permettre de voir directement les modifications effectuées sur le site.</p>
        </div>


        
    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/adminFooter.php'; ?>
</body>    
</html>