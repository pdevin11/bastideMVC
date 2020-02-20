<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'includes/adminHead.php'; ?>
    <title><?= ucfirst($page) ?> - Restaurant la Bastide</title>
</head>

<body>
    <div class="container">

    <h1 class="admin_h1">Panneau d'administration</h1>

    <form action="" method='post'>
        <div>
            <label for="identifiant">Saisissez votre identifiant :</label>
            <input type="text" name="identifiant" id='identifiant' placeholder='Identifiant'>
            <p class="comments"><?php if(isset($identifiantError)){echo $idenfitiantError;} ?></p>
        </div>

        <div>
            <label for="password">Saisissez votre mot de passe :</label>
            <input type="password" name='password' id='password' placeholder='Mot de passe'>
            <p class="comments"><?php if(isset($passwordError)){echo $passwordError;} ?></p>
        </div>

        <div>
            <input type="submit" name='connexion' Value='Connexion'>
        </div>
    </form>

    </div><!-- /.container -->
    
</body>    
</html>