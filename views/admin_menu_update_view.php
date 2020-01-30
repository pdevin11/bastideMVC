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
            <a href="index.php?page=admin_menu"><button type="button" class="btn btn-primary">Retour à la liste des menus</button></a>
        </div> <!-- /.col-md-3 -->

        <div class='col-md-9'>

        <h3>Editer le " <?=$menu['menu_name']?>"</h3>

        <br><br> <!-- ajouter du margin pour virer les br moches -->

            <form action="" method="post">

                <div class="form-group">
                    <label for="menu_name" class="label_title">Nom du menu :</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name" value="<?php if(isset($name)){echo $name;}else{echo $menu['menu_name'];} ?>">
                    <p class="commentError"><?=$menu_nameError?></p>
                </div>

                <div class="form-group">
                    <label for="menu_price" class="label_title">Prix du menu :</label>
                    <input type="number" class="form-control" step="0.1" id="menu_price" name="menu_price" value="<?php if(isset($price)){echo $price;}else{echo $menu['menu_price'];} ?>">
                    <p class="commentError"><?=$menu_priceError?></p>
                </div>

                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="modifier" value="Modifier le menu">
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