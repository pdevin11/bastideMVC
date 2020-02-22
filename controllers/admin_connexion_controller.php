<?php session_start(); 

if(isset($_POST['connexion'])){

    if(isset($_POST['identifiant'])){

        $identifiant = str_secur($_POST['identifiant']);
        $inDbPass = Users::getPassword($identifiant);

        if(isset($_POST['password'])){

            $password = str_secur($_POST['password']);
            $isCorrect = password_verify($password, $inDbPass['passwordHash']);

            if(!$inDbPass){
                $passwordError = 'Identifiant ou mot de passe incorrect';
            } else {
                session_start();
                $_SESSION['identifiant'] = $identifiant;
                header('location:index.php?page=admin_home');
            }
        } else {
            $passwordError = 'Vous devez saisir un mot de passe pour vous connecter';
        }

    } else {
        $identifiantError = 'Vous devez saisir un identifiant pour vous connecter.';
    }
}