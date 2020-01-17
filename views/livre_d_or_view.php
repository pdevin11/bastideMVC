<!-- fichier scriptLivreDor.php dans les scripts à rajouter une fois les classes et le controller créés -->

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
            
    <!-- Cadre derniers avis publiés -->

        <div class="view">
        <h1 style="margin-top: 50px;">Derniers Avis</h1>
            
        <?php // if(isset($msg)){echo '<div class="thank-you">' . $msg . '</div>';}?>

<!-- fichier scriptDerniersAvis.php dans les scripts à rajouter une fois les classes et le controller créés -->

            
        </div>
    
    <!-- Déposer un nouvel avis -->
        
        <h1>Laisser un avis</h1>
        <div class=form_frame>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="view_form" method="post" action="" role="form">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="viewAuthor">Nom<span class="blue"> *</span></label>
                                <input type="text" id="viewAuthor" name="viewAuthor" class="form-control" placeholder="Votre nom" value="<?php // if(isset($_POST['viewAuthor'])){echo $_POST['viewAuthor'];} ?>">
                                <p class="comments"><?php // echo $viewAuthorError; ?></p>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="passageDate">Date de passage<span class="blue"> *</span></label>
                                <input type="date" id="passageDate" name="passageDate" class="form-control" value="<?php // if(isset($_POST['passageDate'])){echo $_POST['passageDate'];} ?>">
                                <p class="comments"><?php // echo $passageDateError; ?></p>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="name">Titre de votre avis<span class="blue"> *</span></label>
                                <input type="text" id="viewTitle" name="viewTitle" class="form-control" placeholder="Le titre de votre avis" value="<?php // if(isset($_POST['viewTitle'])){echo $_POST['viewTitle'];} ?>">
                                <p class="comments"><?php // echo $viewTitleError; ?></p>
                            </div>
                        
                            <div class="col-md-12">
                                <label for="viewContent">Votre Avis<span class="blue"> *</span></label>
                                <textarea id="viewContent" name="viewContent" class="form-control" placeholder="Votre avis" rows="4"><?php // if(isset($_POST['viewContent'])){echo $_POST['viewContent'];} ?></textarea>
                                <p class="comments"><?php // echo $viewContentError; ?></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer" name="viewSubmit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>