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
        
        
    <!-- Photos -->
    
        <h1><?= $lang->photos->titre ?></h1>

        <!-- fichier scriptPhotos.php dans les scripts à rajouter une fois les classes et le controller créés -->

    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>