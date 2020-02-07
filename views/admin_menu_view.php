<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'includes/adminHead.php';?>
    <title><?=ucfirst($page)?> - Restaurant la Bastide</title>
</head>

<body>
    <div class='container'>
    
    <h1 class="admin_h1">Panneau d'administration</h1>

    <!-- Header: Menu principal -->

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

                <div class="tab-pane active" id='1'>

                <h2>Gérer les menus <a href="index.php?page=admin_menu_insert"><button type="button" class="btn btn-outline-success">Ajouter</button></a></h2>

                <br><br>

                <h3>Menus en ligne</h3>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Passer Hors ligne</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($menusOnline as $menu){ ?>

                        <tr>
                            <td scope="row"><?=$menu['menu_name']?></td>
                            <td><?=$menu['menu_price']?></td>
                            <td><a href="index.php?page=admin_menu_update&id=<?=$menu['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier</button></a></td>
                            <td>
                                <form action="" method='post'>
                                    <input type="hidden" name="idMenu" value='<?=$menu['id']?>'>
                                    <input type="submit" name="offline" class='btn btn-outline-danger' value='Passer hors ligne'>
                                </form>                  
                            </td>
                        </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>

                <br><br>

                <h3>Menus enregistrés</h3>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Modifier / Mettre en ligne</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($menusPending as $menuP){ ?>

                        <tr>
                            <td scope="row"><?=$menuP['menu_name']?></td>
                            <td><?=$menuP['menu_price']?></td>
                            <td><a href="index.php?page=admin_menu_update&id=<?=$menuP['id']?>"><button type="button" class="btn btn-outline-warning">Mofidier / Mettre en ligne</button></a></td>
                            <td><a href="index.php?page=admin_menu_delete&id=<?=$menuP['id']?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a></td>
                        </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
                

                </div> <!-- /.tab-pane #1 -->

                <div class="tab-pane" id='2'>

                <h2>Gérer les plats à la carte <a href="index.php?page=admin_plat_insert"><button type="button" class="btn btn-outline-success">Ajouter</button></a></h2>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nom (Traduction)</th>
                        <th scope="col">Type</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Prix XL</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach($allCartePlats as $cartePlat){ ?>

                        <tr>
                            <td scope="row"><?=$cartePlat['plat_name']?> <br> ( <?=$cartePlat['translation']?> )</td>
                            <td><?=$cartePlat['plat_type']?></td>
                            <td><?=$cartePlat['price']?> €</td>
                            <td><?php if(isset($cartePlat['bigSize_price'])){echo $cartePlat['bigSize_price'].'€';}?></td>
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
</body>
</html>