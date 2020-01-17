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
    
    <!-- Actualités -->
        
        <h1><?= $lang->actualite->titre ?></h1>

        <!-- code dans le fichier script nommé scriptActualites.php à retranscrire apres création des classes et du controller -->
        
        
    </div> <!-- /.container -->
    
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>