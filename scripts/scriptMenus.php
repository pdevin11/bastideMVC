<?php 
    require 'database.php';

    echo '<nav>';
    echo    '<ul class="nav nav-pills nav_carte">';
    $db = Database::connect();
    $statement = $db->query('SELECT * FROM menus_names');
    $menus_names = $statement->fetchAll();
    foreach($menus_names as $menu_name)
    {
        if($menu_name['id'] == '1')
            echo '<li role="presentation" class="active"><a href="#' . $menu_name['id'] . '" data-toggle="tab">' . $menu_name['menu_name'] . '</a></li>';
        else
            echo '<li role="presentation"><a href="#' . $menu_name['id'] . '" data-toggle="tab">' . $menu_name['menu_name'] . '</a></li>';
    }
    echo    '</ul>';
    echo '</nav>';

    echo '<div class="tab-content">';

    foreach($menus_names as $menu_name)
    {
        if($menu_name['id'] == 1)
            echo '<div class="tab-pane active" id="' . $menu_name['id'] . '">'; // div selon l'id actif dans les li
        else
            echo '<div class="tab-pane" id="' . $menu_name['id'] . '">';

        $statement = $db->prepare('SELECT * FROM plats_names AS plats INNER JOIN menus_names AS menus ON plats.id_menu = menus.id WHERE plats.id_menu = ?');
        $statement->execute(array($menu_name['id']));
        while($item = $statement->fetch())
        {
            echo '<span class="margin"><span class="menu_name">' . $item['menu_name'] . ' </span><br><span class="menu_price">( ' . $item['menu_price'] . '€ )</span></span>';
            echo '<h3>Entrées</h3>';
            $statement = $db->query("SELECT plat_name, translation FROM plats_names WHERE plat_type = 'Entrée' AND id_menu =' " . $menu_name['id'] . " '");
            while($return = $statement->fetch())
            {
                echo '<p><span class="plat_name">' . $return['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $return['translation'] . '</span></p>';             
            }

            echo '<h3>Plats</h3>';
            $statement = $db->query("SELECT plat_name, translation FROM plats_names WHERE plat_type = 'Plat' AND id_menu =' " . $menu_name['id'] . " '");
            while($return = $statement->fetch())
            {
                echo '<p><span class="plat_name">' . $return['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $return['translation'] . '</span></p>';             
            }

            echo '<h3>Desserts</h3>';
            $statement = $db->query("SELECT plat_name, translation FROM plats_names WHERE plat_type = 'Dessert' AND id_menu =' " . $menu_name['id'] . " '");
            while($return = $statement->fetch())
            {
                echo '<p><span class="plat_name">' . $return['plat_name'] . '</span><br>';
                echo '<span class="translation">' . $return['translation'] . '</span></p>';             
            }

            echo '</div>'; // fin div tab-pane
        } // fin boucle menus
    } // fin boucle menu de navigation
    
    echo    '</div>'; // fin tab content
    echo    '</div>'; // fin container
        
    Database::disconnect();
    ?>