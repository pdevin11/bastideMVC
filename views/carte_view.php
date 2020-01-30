<!DOCTYPE html>
<html>
<head>
    <?php include_once 'includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <!-- Header : menu principal -->

    <?php include_once 'includes/header.php'; ?>

    <div class="container">

    <!-- Formules -->   
        
    <nav>
        <ul class='nav nav-pills nav_carte'>

            <?php foreach($allMenus as $menu){

                if($menu['id'] == "1"){?>
                    <li role='presentation' class='active'><a href="#<?=$menu['id']?>" data-toggle='tab'><?= $menu['menu_name']?></a></li>
                <?php } else { ?>
                    <li role='presentation'><a href="#<?=$menu['id']?>" data-toggle='tab'><?=$menu['menu_name']?></a></li>
            <?php } /* end else */
            } /* end foreach */ ?>

            <li role='presentation'><a href="#laCarte" data-toggle='tab'>À la carte</a></li>
        </ul>
    </nav>
        
    <div class='tab-content'>

        <?php for($i=0; $i<count($allMenus); $i++){ 
            if($allMenus[$i]['id'] == 1){?>
                <div class='tab-pane active' id='<?=$allMenus[$i]['id']?>'>
            <?php } else { ?>
                <div class='tab-pane' id='<?=$allMenus[$i]['id']?>'>
            <?php } ?> <!-- end else -->
                
                <div class='margin'>
                    <span class='menu_name'><?=$allMenus[$i]['menu_name']?></span><br>
                    <span class='menu_price'>(<?=$allMenus[$i]['menu_price']?> €)</span>
                </div> <!-- ./margin-->

                <h3>Entrées</h3>

                <?php for($j=0; $j<count($entrees[$i]); $j++){ ?>
                    <p>
                        <span class='plat_name'><?=$entrees[$i][$j]['plat_name']?></span><br>
                        <span class='translation'><?=$entrees[$i][$j]['plat_name']?></span><br>
                    </p>
                <?php } ?> <!-- end for "Entrées" -->

                <h3>Plats</h3>

                <?php for($j=0; $j<count($plats[$i]); $j++){ ?>
                    <p>
                        <span class='plat_name'><?=$plats[$i][$j]['plat_name']?></span><br>
                        <span class='translation'><?=$plats[$i][$j]['plat_name']?></span><br>
                    </p>
                <?php } ?> <!-- end for "Plats" -->

                <h3>Desserts</h3>

                <?php for($j=0; $j<count($desserts[$i]); $j++){ ?>
                    <p>
                        <span class='plat_name'><?=$desserts[$i][$j]['plat_name']?></span><br>
                        <span class='translation'><?=$desserts[$i][$j]['plat_name']?></span><br>
                    </p>
                <?php } ?> <!-- end for "Desserts" -->
            </div> <!-- ./tab-pane -->
        <?php } ?> <!-- end for "allMenus -->

            <div class='tab-pane' id='laCarte'>
                <h3>Les Entrées</h3>

                    <?php foreach($carteEntrees as $carteEntree){ ?>
                        <p>
                            <span class='plat_name'><?=$carteEntree['plat_name']?></span>
                            <span class='menu_price_carte'>
                                <?php
                                    if(!isset($carteEntree['bigSize_price']))
                                        echo ' ('.$carteEntree['price'].'€)';
                                    else
                                        echo ' (S: '.$carteEntree['price'].'€ / XL: '.$carteEntree['bigSize_price'].'€)';
                                ?>
                            </span><br>
                            <span class='translation'><?=$carteEntree['translation']?></span>
                        </p>      
                    <?php } ?> <!-- end foreach entrées -->

                <h3>Les Salades</h3>

                    <?php foreach($carteSalades as $carteSalade){ ?>
                        <p>
                            <span class='plat_name'><?=$carteSalade['plat_name']?></span>
                            <span class='menu_price_carte'>
                                <?php
                                    if(!isset($carteSalade['bigSize_price']))
                                        echo ' ('.$carteSalade['price'].'€)';
                                    else
                                        echo ' (S: '.$carteSalade['price'].'€ / XL: '.$carteSalade['bigSize_price'].'€)';
                                ?>
                            </span><br>
                            <span class='translation'><?=$carteSalade['translation']?></span>
                        </p>      
                    <?php } ?> <!-- end foreach salades -->

                <h3>Les Plats</h3>

                    <?php foreach($cartePlats as $cartePlat){ ?>
                        <p>
                            <span class='plat_name'><?=$cartePlat['plat_name']?></span>
                            <span class='menu_price_carte'>
                                <?php
                                    if(!isset($cartePlat['bigSize_price']))
                                        echo ' ('.$cartePlat['price'].'€)';
                                    else
                                        echo ' (S: '.$cartePlat['price'].'€ / XL: '.$cartePlat['bigSize_price'].'€)';
                                ?>
                            </span><br>
                            <span class='translation'><?=$cartePlat['translation']?></span>
                        </p>      
                    <?php } ?> <!-- end foreach plats -->

                <h3>Les Fromages - Cheeses</h3>

                    <?php foreach($carteFromages as $carteFromage){ ?>
                        <p>
                            <span class='plat_name'><?=$carteFromage['plat_name']?></span>
                            <span class='menu_price_carte'>
                                <?php
                                    if(!isset($carteFromage['bigSize_price']))
                                        echo ' ('.$carteFromage['price'].'€)';
                                    else
                                        echo ' (S: '.$carteFromage['price'].'€ / XL: '.$carteFromage['bigSize_price'].'€)';
                                ?>
                            </span><br>
                            <span class='translation'><?=$carteFromage['translation']?></span>
                        </p>      
                    <?php } ?> <!-- end foreach fromages -->

                <h3>Les Desserts "maison" - Homemade desserts</h3>

                    <?php foreach($carteDesserts as $carteDessert){ ?>
                        <p>
                            <span class='plat_name'><?=$carteDessert['plat_name']?></span>
                            <span class='menu_price_carte'>
                                <?php
                                    if(!isset($carteDessert['bigSize_price']))
                                        echo ' ('.$carteDessert['price'].'€)';
                                    else
                                        echo ' (S: '.$carteDessert['price'].'€ / XL: '.$carteDessert['bigSize_price'].'€)';
                                ?>
                            </span><br>
                            <span class='translation'><?=$carteDessert['translation']?></span>
                        </p>
                    <?php } ?> <!-- end foreach desserts -->

                <p><span class="plat_name">******</span></p>

                    <p>
                        <span class="plat_name">Café ou thé gourmand</span><span class="menu_price" style='font-size:20px !important;'>( 7.50€ )</span><br>
                        <span class="translation">Coffee or tea with sweet treats</span>
                    </p>

                <p><span class="plat_name">******</span></p>

                    <p>
                        <span class="plat_name">Supplément menu</span><span class="menu_price" style='font-size:20px !important;'>( 3.50€ )</span><br>
                        <span class="translation">menu supplement</span>
                    </p>

            </div> <!-- ./tab-pane #/laCarte -->

    </div> <!-- ./tab-content -->

    </div> <!-- ./container -->
        
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>