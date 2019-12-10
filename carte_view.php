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

    
    <nav>
        <ul class="nav nav-pills nav_carte">
    <?php

    foreach($allMenus as $menu_name)
    {
        if($menu_name['id'] == '1')
            echo '<li role="presentation" class="active"><a href="#' . $menu_name['id'] . '" data-toggle="tab">' . $menu_name['menu_name'] . '</a></li>';
        else
            echo '<li role="presentation"><a href="#' . $menu_name['id'] . '" data-toggle="tab">' . $menu_name['menu_name'] . '</a></li>';
    }
    ?>
        </ul>
    </nav>

    <div class="tab-content">

    <?php

    foreach($allMenus as $menu_name)
    {
        if($menu_name['id'] == 1)
            echo '<div class="tab-pane active" id="' . $menu_name['id'] . '">'; // div selon l'id actif dans les li
        else
            echo '<div class="tab-pane" id="' . $menu_name['id'] . '">';


        foreach($menuDetails as $menu)
        {
            echo '<span class="margin"><span class="menu_name">' . $menu['menu_name'] . ' </span><br><span class="menu_price">( ' . $menu['menu_price'] . '€ )</span></span>';
            echo '<h3>Entrées</h3>';
            foreach($entrees as $entree)
            {
                echo '<p><span class="plat_name">' . $entree['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $entree['translation'] . '</span></p>';             
            }

            echo '<h3>Plats</h3>';
            foreach($plats as $plat)
            {
                echo '<p><span class="plat_name">' . $plat['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $plat['translation'] . '</span></p>';             
            }

            echo '<h3>Desserts</h3>';
            foreach($desserts as $dessert)
            {
                echo '<p><span class="plat_name">' . $dessert['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $dessert['translation'] . '</span></p>';             
            }

            echo '</div>'; // fin div tab-pane
        } // fin boucle menus
    } // fin boucle menu de navigation
    
    echo    '</div>'; // fin tab content
    ?>

    </div> <!-- ./container -->
        
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>
