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

    <h2>Gestion des horaires</h2>

    <br>

    <form action="" method='post'>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id='table'>
                
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Midi ?</th>
                            <th scope="col">Actuellement le midi</th>
                            <th scope="col">Soir ?</th>
                            <th scope="col">Actuellement le soir</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row"><h4>Lundi</h4></td>
                            <td>
                                <?php if($openings[0]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='monLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='monLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[0]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[0]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='monDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='monDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[0]['isOpenForDiner'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Lundi -->

                        <tr>
                            <td scope="row"><h4>Mardi</h4></td>
                            <td>
                                <?php if($openings[1]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='tueLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='tueLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[1]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[1]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='tueDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='tueDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[1]['isOpenForDiner'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Mardi -->

                        <tr>
                            <td scope="row"><h4>Mercredi</h4></td>
                            <td>
                                <?php if($openings[2]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='wedLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='wedLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[2]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[2]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='wedDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='wedDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[2]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Mercredi -->

                        <tr>
                            <td scope="row"><h4>Jeudi</h4></td>
                            <td>
                                <?php if($openings[3]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='thurLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='thurLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[3]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[3]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='thurDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='thurDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[3]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Jeudi -->

                        <tr>
                            <td scope="row"><h4>Vendredi</h4></td>
                            <td>
                                <?php if($openings[4]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='friLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='friLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[4]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[4]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='friDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='friDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[4]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Vendredi -->

                        <tr>
                            <td scope="row"><h4>Samedi</h4></td>
                            <td>
                                <?php if($openings[5]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='satLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='satLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[5]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[5]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='satDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='satDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[5]['isOpenForDiner'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Samedi -->

                        <tr>
                            <td scope="row"><h4>Dimanche</h4></td>
                            <td>
                                <?php if($openings[6]['isOpenForLunch'] == 1){ ?>
                                    <input type="submit" name='sunLunchClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='sunLunchOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[6]['isOpenForLunch'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                            <td>
                                <?php if($openings[6]['isOpenForDiner'] == 1){ ?>
                                    <input type="submit" name='sunDinerClosed' class='btn btn-danger' value='Fermer'>
                                <?php } else { ?>
                                    <input type="submit" name='sunDinerOpen' class='btn btn-success' value='Ouvrir'>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($openings[6]['isOpenForDiner'] == 1){echo '<b>Ouvert</b>';} 
                                else {echo '<b>Fermé</b>';}?>
                            </td>
                        </tr> <!-- /tr Dimanche -->
                        
                    </tbody>
                </table>

            </div> <!-- /.col-md-8 -->
            <div class="col-md-2"></div>
        </div> <!-- /.row -->
    </form>
    
    </div> <!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/adminFooter.php'; ?>
</body>    
</html>