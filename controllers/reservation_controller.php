<?php

if (!empty($_POST) && isset($_POST['btnReservation'])){
    $Success = true;

    if(empty($_POST['name'])){
        $nameError = $lang->reservation->nomError;
    }
    if(empty($_POST['email'])){
        $emailError = $lang->reservation->mailError;
    }
    if(empty($_POST['phone'])){
        $phoneError = $lang->reservation->phoneError; 
    }
    if(empty($_POST['guests'])){
        $guestsError = $lang->reservation->inviteError;
    }
    if(empty($_POST['date'])){
        $dateError = $lang->reservation->dateError;
    }
    else if(strtotime($_POST['date']) - strtotime('now') <= 0)
    {
        $dateError = $lang->reservation->datePassee;
        $Success = false;
    }
    if(empty($_POST['time'])){
        $timeError = $lang->reservation->heureError;
        $Success = false;
    }
    if(empty($_POST['message'])){
        $messageReservation = 'Aucun message envoyé lors de la réservation.';
    } else {
        $messageReservation = str_secur($_POST['message']);
    }
    if(empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['phone']) OR empty($_POST['guests']) OR empty($_POST['date']) OR empty($_POST['time']))
    {
        $Success = false;
    }
    if($Success){
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['guests']) AND !empty($_POST['date']) AND !empty($_POST['time']))
        {
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"webmaster@restaurant-labastide.fr"'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message='
            <html>
                <body>
                    <div align="center">
                        <h1>Nouvelle réservation</h1>
                            <u>Réservation au nom de :</u> ' . str_secur($_POST['name']) . '<br />
                            <u>Adresse email :</u> ' . str_secur($_POST['email']) . '<br />
                            <u>Téléphone :</u> ' . str_secur($_POST['phone']) . '<br />
                            <u>Nombre de couverts :</u> ' . $_POST['guests'] . '<br />
                            <u>Date de la réservation :</u> ' . strftime('%d-%m-%Y',strtotime($_POST["date"])) . '<br />
                            <u>Heure de la réservation :</u> ' . $_POST['time'] . '<br />
                            <br />
                            <u>Message :</u> ' . $messageReservation . '<br />

                            <p><a href="mailto:'. str_secur($_POST['email']) .'">Cliquez ici</a> pour envoyer un mail de confirmation de la réservation.</p>
                    </div>
                </body>
            </html>
            ';

            mail("contact@pdevin.fr", "Nouvelle réservation", $message, $header);
            $msg= $lang->reservation->messageResaOk;
        }
    } elseif (!$Success) {
        $msg = $lang->reservation->messageResaFail;
    }
}
