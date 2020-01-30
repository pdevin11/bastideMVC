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
            <nav>
                <ul class='nav nav-pills' id='ul-lateral'>
                    <li role='presentation' class='active'><a href="#1" data-toggle='tab'>Gestion des menus</a></li>
                    <li role='presentation' ><a href="#2" data-toggle='tab'>Gestion des plats</a></li>
                </ul>
            </nav>
        </div> <!-- /.col-md-3 -->

        <div class='col-md-9'>
            <div class='tab-content'>

                <div <?php if(isset($_POST['btn-name'])){echo 'class="tab-pane active"';} elseif(isset($_POST['btn-firstname']) || isset($_POST['btn-city'])){echo 'class="tab-pane"';}else{echo 'class="tab-pane active"';} ?> id='1'>
                    <h2>Gérer les menus <a href="index.php?page=admin_menu_insert"><button type="button" class="btn btn-outline-success">Ajouter</button></a></h2>

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($allMenus as $menu){ ?>

                            <tr>
                                <th scope="row"><?= $menu['id']?></th>
                                <td><?=$menu['menu_name']?></td>
                                <td><?=$menu['menu_price']?></td>
                                <td><a href="index.php?page=admin_menu_update&id=<?=$menu['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                                <td><a href="index.php?page=admin_menu_delete&id=<?=$menu['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                            </tr>
                            
                            <?php } ?>
                        </tbody>
                    </table>
                    
                </div> <!-- /.tab-pane #1 -->

                <div <?php if(isset($_POST['btn-firstname'])){echo 'class="tab-pane active"';}else{echo 'class="tab-pane"';} ?> id='2'>
                <h2>Gérer les plats à la carte <a href="index.php?page=admin_plat_insert"><button type="button" class="btn btn-outline-success">Ajouter</button></a></h2>

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Type</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($allCartePlats as $cartePlat){ ?>

                            <tr>
                                <th scope="row"><?= $cartePlat['id']?></th>
                                <td><?=$cartePlat['plat_name']?></td>
                                <td><?=$cartePlat['plat_type']?></td>
                                <td><?=$cartePlat['price']?> €</td>
                                <td><a href="index.php?page=admin_plat_update&id=<?=$cartePlat['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                                <td><a href="index.php?page=admin_plat_delete&id=<?=$cartePlat['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                            </tr>
                            
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!-- /.tab-pane #2 -->

            </div> <!-- /.tab-content -->
        </div> <!-- /.col-md-9 -->

    </div> <!-- /.row -->

</div> <!-- /.container -->

<!-- Footer -->

<?php include_once 'includes/adminFooter.php'; ?>

</body>    
</html>