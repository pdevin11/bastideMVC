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

    <div class='row'>

        <div class='col-md-3'>
            <a href="index.php?page=admin_menu"><button type="button" class="btn btn-primary">Retour à la gestion des plats</button></a>
        </div> <!-- /.col-md-3 -->

        <div class='col-md-9'>

        <h3>Modifier le plat " Nom du plat<?php /* Nom du plat */ ?> "</h3>

        <br><br> <!-- ajouter du margin pour virer les br moches -->

            <form action="" method="post">

                <div class="form-group">
                    <label for="plat_name" class="label_title">Nom du plat :</label>
                    <input type="text" class="form-control" id="plat_name" name="plat_name" value="<?php /* $req['plat_name'] */ ?>">
                    <p class="commentError"><?php echo $menu_nameError; ?></p>
                </div>
                
                <div class="form-group">
                    <label for="translation" class="label_title">Traduction du nom :</label>
                    <input type="text" class="form-control" id="translation" name="translation" value="<?php /* $req['translation'] */ ?>">
                    <p class="commentError"><?php echo $menu_nameError; ?></p>
                </div>
                
                <div class="form-group">
                    <p>Quel est le type du plat ?</p>
                        <input type="radio" name="plat_type" value="Entrée" name="entree"> <label for="entree">Entrée</label>
                        <input type="radio" name="plat_type" value="Salade" name="salade"> <label for="salade">Salade</label>
                        <input type="radio" name="plat_type" value="Plat" name="plat"> <label for="plat">Plat</label>
                        <input type="radio" name="plat_type" value="Fromage" name="fromage"> <label for="fromage">Fromage</label>
                        <input type="radio" name="plat_type" value="Dessert" name="dessert"> <label for="dessert">Dessert</label>
                    <p class="commentError"><?php echo $plat_typeError; ?></p>
                </div>

                <div class="form-group">
                    <label for="plat_price" class="label_title">Prix du plat :</label>
                    <input type="number" class="form-control" step="0.1" id="plat_price" name="plat_price" value="<?php /* $req['price'] */ ?>">
                    <p class="commentError"><?php echo $menu_priceError; ?></p>
                </div>

                <div class="form-group">
                    <label for="bigSize_price" class="label_title">Prix du plat en grande taille :</label> (A ne compléter que s'il existe deux tailles pour le plat)
                    <input type="number" class="form-control" step="0.1" id="bigSize_price" name="bigSize_price" value="<?php /* $req['bigSize_price'] */ ?>">
                    <p class="commentError"><?php echo $menu_priceError; ?></p>
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="button" value="Ajouter le plat">
                    <a href="index.php?page=admin_menu"><button type="button" class="btn btn-danger">Annuler</button></a>

                </div>

            </form>

        </div> <!-- /.col-md-9 -->

    </div> <!-- /.row -->

</div> <!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/adminFooter.php'; ?>
</body>    
</html>