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

        <h3>Modifier le plat " <?=$dish['plat_name']?> " du menu " <?=$menu['menu_name']?> "</h3>

        <br><br> <!-- ajouter du margin pour virer les br moches -->

            <?php if($dish['isOnline'] == "true"){ ?>
                <form action="" method='post'>
                    <p>Ce plat est en ligne, souhaitez-vous le retirer du menu ?
                    <input type="submit" name='setOffline' value='Retirer de la carte' class='btn btn-danger'></p>
                </form>
            <?php } else { ?>
                <form action="" method='post'>
                    <p>Ce plat est hors ligne, souhaitez-vous l'ajouter au menu ?
                    <input type="submit" name='setOnline' value='Ajouter à la carte' class='btn btn-success'></p>
                </form>
            <?php } ?>

            <br><br>

            <form action="" method="post">

                <div class="form-group">
                    <label for="plat_name" class="label_title">Nom du plat :</label>
                    <input type="text" class="form-control" id="plat_name" name="plat_name" value="<?=$dish['plat_name']?>">
                    <p class="commentError"><?php echo $plat_nameError; ?></p>
                </div>
                
                <div class="form-group">
                    <label for="translation" class="label_title">Traduction du nom :</label>
                    <input type="text" class="form-control" id="translation" name="translation" value="<?=$dish['translation']?>">
                    <p class="commentError"><?php echo $translationError; ?></p>
                </div>
                
                <div class="form-group">
                    <p>Quel est le type du plat ?</p>
                        <input type="radio" name="plat_type" value="Entrée" id='entree'   <?php if($dish['plat_type']=='Entrée'){echo 'checked';}?>> <label for="entree">Entrée</label>
                        <input type="radio" name="plat_type" value="Plat" id='plat'    <?php if($dish['plat_type']=='Plat'){echo 'checked';}?>> <label for="plat">Plat</label>
                        <input type="radio" name="plat_type" value="Dessert" id='dessert' <?php if($dish['plat_type']=='Dessert'){echo 'checked';}?>> <label for="dessert">Dessert</label>
                    <p class="commentError"><?php echo $plat_typeError; ?></p>
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name='modifier' value="Modifier le plat">
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