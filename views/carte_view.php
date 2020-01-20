<!DOCTYPE html>
<html>
<head>
    <?php include_once 'includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <div class="container">
    <!-- Header : menu principal -->

    <?php include_once 'includes/header.php'; ?>
    
    <!-- Formules -->
    
    <div class="row">
        <div class='col-md-2 menu_list'>
            <ul class="list_menus">
                <?php foreach($allMenus as $menu){ ?>
                    <li><a class="list_menu" href="index.php?page=carte#<?= $menu['id'] ?>"><?= $menu['menu_name'] ?></a></li>
                <?php } ?>
            </ul>
        </div> <!-- ./col-md-2 -->
        
        <div class='col-md-10 menus'>

        <?php for($i=0; $i<count($allMenus); $i++){ ?>

            <div class='the-menu' id="<?= $allMenus[$i]['id'] ?>">
                <h2><span class="menu_name"><?= $allMenus[$i]['menu_name'] ?></span></h2>

                <div class='plat_type'>
                    <h3>Entrées</h3>
                    <?php for($j=0; $j<count($entrees); $j++){ ?>

                        <span class='plat_name'><?= $entrees[$i][$j]['plat_name'] ?></span>
                        <span class="translation"><?= $entrees[$i][$j]['translation'] ?></span>

                    <?php } ?>
                </div>

                <div class='plat_type'>
                    <h3>Plats</h3>
                    <?php for($j=0; $j<count($plats); $j++){ ?>

                        <span class="plat_name"><?= $plats[$i][$j]['plat_name'] ?></span>
                        <span class="translation"><?= $plats[$i][$j]['translation'] ?></span>

                    <?php } ?>
                </div>

                <div class='plat_type'>
                    <h3>Désserts</h3>
                    <?php for($j=0; $j<count($desserts); $j++){ ?>

                        <span class='plat_name'><?= $desserts[$i][$j]['plat_name'] ?></span>
                        <span class='translation'><?= $desserts[$i][$j]['translation'] ?></span>

                    <?php } ?>
                </div>

            </div> <!-- ./the-menu -->

            <?php } ?>

        </div> <!-- ./col-md-10 -->

    </div> <!-- ./row -->
    </div> <!-- ./container -->
        
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>
