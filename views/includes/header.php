<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php?page=home"><?= $lang->header->accueil ?></a></li>
                <li><a href="index.php?page=carte"><?= $lang->header->carte ?></a></li>
                <li><a href="index.php?page=photos"><?= $lang->header->photos ?></a></li>
                <li><a href="index.php?page=reservation"><?= $lang->header->reservation ?></a></li>
                <li><a href="index.php?page=contact"><?= $lang->header->contact ?></a></li>
                <li><a href="index.php?page=home&lang=fr"><img src='assets/images/icon-fr.png' alt="icone fr" class="lang-icon"></a></li>
                <li><a href="index.php?page=home&lang=en"><img src='assets/images/icon-en.png' alt="icone en" class="lang-icon"></a></li>
            </ul>
        </div>
    </nav>
</header>