<!DOCTYPE html>
<html>
<head>
    <?php include_once 'includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <!-- Header : menu principal -->

    <?php include_once 'includes/header.php'; ?>
    
    <!-- Formules -->

    <div class="container">
    
    <ul>
        <?php foreach($allMenus as $menu){ ?>
            <li><a href="index.php?page=carte#<?= $menu['id'] ?>"><?= $menu['menu_name'] ?></a></li>
        <?php } ?>
    </ul>

    <?php for($i=0; $i<count($allMenus); $i++){ ?>

    <div class='menu_frame'>
        <h2><?= $allMenus[$i]['menu_name'] ?></h2>

        <div class='entrees'>
            <h2>Entrées</h2>
            <?php for($j=0; $j<count($entrees); $j++){ ?>

                <h3><?= $entrees[$i][$j]['plat_name'] ?></h3>

            <?php } ?>
        </div>

        <div class='plats'>
            <h2>Plats</h2>
            <?php for($j=0; $j<count($plats); $j++){ ?>

                <h3><?= $plats[$i][$j]['plat_name'] ?></h3>

            <?php } ?>
        </div>

        <div class='desserts'>
            <h2>Désserts</h2>
            <?php for($j=0; $j<count($desserts); $j++){ ?>

                <h3><?= $desserts[$i][$j]['plat_name'] ?></h3>

            <?php } ?>
        </div>
    
    </div>

    <?php } ?>
    
    </div> <!-- ./container -->
        
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>

<style>
.menu_frame{
    border: 1px solid black;
    margin: 10px;
    padding: 10px;
}
</style>