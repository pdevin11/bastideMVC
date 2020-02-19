<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'includes/head.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <div class="container">
    <!-- Header : menu principal -->

        <?php include_once 'includes/header.php'; ?>

    <!-- Image -->

        <img src="assets/images/bandeauLogo.png" alt="bastide" id="main-image" />

    <!-- Description du restaurant -->

        <section id="restaurant_description">
            <h1>Restaurant La Bastide</h1>
            <p><?= $lang->home->presentation ?></p>
            <p><?= $lang->home->carte_resa ?></p>

            <h4><?= $lang->home->horaires ?></h4>
            <p><?php /* $lang->home->horairesDetails */ ?></p>
            
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-6'>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"><?= $lang->home->midi?></th> 
                            <th scope="col"><?= $lang->home->soir?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Lundi -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->mon?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[0]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[0]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Lundi -->

                        <!-- Mardi -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->tue?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[1]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[1]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Mardi -->

                        <!-- Mercredi -->
                    
                        <tr>
                            <td scope="row">
                                <?=$lang->home->wed?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[2]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[2]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Mercredi -->

                        <!-- Jeudi -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->thur?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[3]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[3]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Jeudi -->

                        <!-- Vendredi -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->fri?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[4]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[4]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Vendredi -->

                        <!-- Samedi -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->sat?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[5]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[5]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Samedi -->

                        <!-- Dimanche -->

                        <tr>
                            <td scope="row">
                                <?=$lang->home->sun?>
                            </td>
                            <td>
                                <?php 
                                    if($infos[6]['isOpenForLunch'] == 1){echo $lang->home->open;} 
                                    else {echo $lang->home->closed;} 
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($infos[6]['isOpenForDiner'] == 1){echo $lang->home->open;}
                                    else {echo $lang->home->closed;}
                                ?>
                            </td> 
                        </tr> <!-- /tr Dimanche -->

                    </tbody>
                </table>
                </div>
                <div class='col-md-3'></div>
            </div>

            <h4><?= $lang->home->paiement ?></h4>
            <p><?= $lang->home->paiementDetails ?></p>

        </section><!-- /#restaurant_description -->
        
    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>
</body>    
</html>