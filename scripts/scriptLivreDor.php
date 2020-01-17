<?php require 'database.php';
          
function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['viewSubmit'])){
    $success = true;

    if(empty($_POST['viewAuthor'])){
        $viewAuthorError = "Vous devez ajouter un nom ou un pseudonyme pour laisser un avis";
    }
    if(empty($_POST['viewTitle'])){
        $viewTitleError = "Vous devez indiquer un titre pour votre avis";
    }
    if(empty($_POST['viewContent'])){
        $viewContentError = "Vous devez laisser un avis en plus du titre";
    }
    if(empty($_POST['passageDate'])){
        $passageDateError = "Merci d'indiquer la date de votre passage";
    }
    else if(strtotime($_POST['passageDate']) - strtotime('now') >= 0){
        $passageDateError = "La date de passage indiquée n'est pas encore passée";
        $success = false;
    }
    if(empty($_POST['viewAuthor']) OR empty($_POST['viewTitle']) OR empty($_POST['viewContent']) OR empty($_POST['passageDate'])){
        $Success = false;
    }
    if($success){
        if(!empty($_POST['viewAuthor']) OR !empty($_POST['viewTitle']) OR !empty($_POST['viewContent']) OR !empty($_POST['passageDate'])){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"webmaster@restaurant-labastide.fr"'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message='
            <html>
                <body>
                    <div align="center">
                        <h1>Nouvel avis</h1>
                            <u>Auteur de l\'avis :</u> ' . verifyInput($_POST['viewAuthor']) . '<br />
                            <u>Date de passage :</u> ' . strftime('%d-%m-%Y',strtotime($_POST["passageDate"])) . '<br />
                            <u>Titre de l\'avis :</u> ' . verifyInput($_POST['viewTitle']) . '<br />
                            <u>Contenu de l\'avis :</u> ' . $_POST['viewContent'] . '<br />
                    </div>
                </body>
            </html>
            ';
            mail("restolabastide@aol.com", "Nouvel avis", $message, $header);
            $msg="Merci, votre avis sera bientôt publié.";
        }
    } else {
        $msg = 'Une erreur est survenue. Veuillez vérifier que tous les champs soient remplis et que la date de passage soit bien passée.';
    }
    

    if($success){
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO views_moderation (view_title, view_content, view_author, passage_date) values (?, ?, ?, ?)");
        $statement->execute(array($_POST['viewTitle'], $_POST['viewContent'], $_POST['viewAuthor'], $_POST['passageDate']));
        $db = Database::disconnect();
    }
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>