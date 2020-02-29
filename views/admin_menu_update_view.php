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

        <br>
        
        <?php
        if($menu['isOnline'] == 'false'){ ?>
            <form action="" method='post'>
                <label for="online">Ce menu est hors ligne. Souhaitez-vous le mettre en ligne?</label>
                <input type="submit" name='online' class='btn btn-success' value='Oui'>
            </form>
        <?php    
        }else if($menu['isOnline'] == 'true'){?>
            <form action="" method='post'>
                <label for="offline">Ce menu est en ligne. Souhaitez-vous le mettre hors ligne?</label>
                <input type="submit" name='offline' class='btn btn-success' value='Oui'>
            </form>       
        <?php
        }
        ?>

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

            <br>
            <br>

            <h2>Détail du menu " <?=$menu['menu_name'] ?> " <a href="index.php?page=admin_menu_insert_plat&id_menu=<?=$menu['id']?>"><button type="button" class="btn btn-outline-success">Ajouter</button></a></h2>

            <h3>Entrées</h3>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Traduction</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                        <th scope="col">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($entrees as $entree){ ?>

                        <tr>
                            <td scope="row"><?= $entree['plat_name'] ?></td>
                            <td><?= $entree['translation'] ?></td>
                            <td><a href="index.php?page=admin_menu_update_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$entree['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                            <td><a href="index.php?page=admin_menu_delete_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$entree['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                            <td>
                                <?php if($entree['isOnline'] == "true"){ ?>
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                <?php } else if($entree['isOnline'] == "false") { ?>
                                    <span class="glyphicon glyphicon-remove-sign"></span>
                                <?php } ?>
                            </td>
                        </tr>
                        
                        <?php } ?>

                    </tbody>
                </table>

            <h3>Plat</h3>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Traduction</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($plats as $plat){ ?>

                        <tr>
                            <td scope="row"><?= $plat['plat_name'] ?></td>
                            <td><?= $plat['translation'] ?></td>
                            <td><a href="index.php?page=admin_menu_update_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$plat['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                            <td><a href="index.php?page=admin_menu_delete_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$plat['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                            <td>
                                <?php if($plat['isOnline'] == "true"){ ?>
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                <?php } else if($plat['isOnline'] == "false") { ?>
                                    <span class="glyphicon glyphicon-remove-sign"></span>
                                <?php } ?>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>      

            <h3>Desserts</h3>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Traduction</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($desserts as $dessert){ ?>

                        <tr>
                            <td scope="row"><?=$dessert['plat_name']?></td>
                            <td><?=$dessert['translation']?></td>
                            <td><a href="index.php?page=admin_menu_update_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$dessert['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                            <td><a href="index.php?page=admin_menu_delete_plat&id_menu=<?=$menu['id']?>&id_plat=<?=$dessert['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                            <td>
                                <?php if($dessert['isOnline'] == "true"){ ?>
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                <?php } else if($dessert['isOnline'] == "false") { ?>
                                    <span class="glyphicon glyphicon-remove-sign"></span>
                                <?php } ?>
                            </td>
                        </tr>
                        
                        <?php } ?>

                    </tbody>
                </table>

        </div> <!-- /.col-md-9 -->

    </div> <!-- /.row -->

</div> <!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/adminFooter.php'; ?>
</body>    
</html>