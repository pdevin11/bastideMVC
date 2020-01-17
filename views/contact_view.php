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
    
    <!-- Nous contacter -->
    
        <h1>Contact</h1>
        <div class="contact">
            <div class="adress">
                <p><span id="name"> Restaurant la Bastide</span><br>
                                    52 rue Saint Jacques<br>
                                    24540 MONPAZIER</p>
            </div><!-- /.adress -->
            
            <iframe src="https://www.google.com/maps/d/embed?mid=1tYYzwf0rkNyPzKwNM5vkMq7wvclxxtDz" width="480" height="360"></iframe>
            
            <div class="divider"></div>

            <div class="contact_us">
                <p><strong>Email: </strong> <a href="mailto:restolabastide@aol.com"> restolabastide@aol.com </a></p>
                <p><strong><?= $lang->contact->telephone ?>: </strong> <a href="tel:0553226059">05 53 22 60 59</a></p>
            </div><!-- /.contact_us -->

            <div class="divider"></div>

            <div class="follow_us">
                <h3><?= $lang->contact->suivezNous ?></h3>
                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/pages/category/French-Restaurant/Restaurant-la-Bastide-monpazier-1687833538129877/" target="_blank"><img src="assets/images/logo_fb.png" alt="facebook" class="social_image"></a></li>
                        <li><a href="https://www.tripadvisor.fr/Restaurant_Review-g674129-d1894641-Reviews-Restaurant_La_Bastide-Monpazier_Dordogne_Nouvelle_Aquitaine.html" target="_blank"><img src="assets/images/logo_tripadvisor.png" alt="tripadvisor" class="social_image"></a></li>
                        <li><a href="https://www.google.com/maps/place/Restaurant+la+Bastide/@44.681697,0.8938998,15z/data=!4m5!3m4!1s0x0:0xcdd3846d03d9f758!8m2!3d44.681697!4d0.8938998" target="_blank"><img src="assets/images/logo_google.png" alt="google" class="social_image"></a></li>
                    </ul>
                </div> <!-- /.social -->
            </div> <!-- /.follow_us -->
        </div> <!-- /.contact -->
    </div> <!-- /.container -->
    
    <!-- Footer -->
    
    <?php include_once 'includes/footer.php'; ?>
    
</body>    
</html>