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
            <a href="index.php?page=admin_menu_update&id=<?=$menu['id']?>"><button type="button" class="btn btn-primary">Retour à la modification du menu</button></a>
        </div> <!-- /.col-md-3 -->

        <div class='col-md-9'>

        <h3>Suppression d'un plat du " <?=$menu['menu_name']?> "</h3>

        <br><br> <!-- ajouter du margin pour virer les br moches -->

            <form action="" method="post">

                <p>Voulez-vous supprimer le plat " <?=$dish['plat_name']?> " ?</p>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name='supprimer' value="SUPPRIMER">
                    <a href="index.php?page=admin_menu_update&id=<?=$menu['id']?>"><button type="button" class="btn btn-danger">Annuler</button></a>
                </div>

            </form>

        </div> <!-- /.col-md-9 -->

    </div> <!-- /.row -->

</div> <!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/adminFooter.php'; ?>
</body>    
</html>