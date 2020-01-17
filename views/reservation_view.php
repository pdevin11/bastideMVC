<!-- fichier scriptReservation.php dans les scripts à rajouter une fois les classes et le controller créés -->

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

        <h1><?= $lang->reservation->titre ?></h1>

        <div class="form_frame">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="reservation_form" method="post" action="" role="form">

                        <?php if(isset($msg)){echo '<div class="thank-you">' . $msg . '</div>';}?>

                        <div class="row">

                            <div class="col-md-6">
                                <label for="name"><?= $lang->reservation->nom ?></label><strong> *</strong>
                                <input type="text" id="name" name="name" class="form-control" placeholder="<?= $lang->reservation->votreNom ?>" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
                                <p class="comments"><?php if(isset($nameError)){echo $nameError;} ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="email"><?= $lang->reservation->email ?></label><strong> *</strong>
                                <input type="email" id="email" name="email" class="form-control" placeholder="<?= $lang->reservation->votreEmail ?>" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                                <p class="comments"><?php if(isset($emailError)){echo $emailError;} ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone"><?= $lang->reservation->telephone ?></label><strong> *</strong>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="<?= $lang->reservation->votreTelephone ?>" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">
                                <p class="comments"><?php if(isset($phoneError)){echo $phoneError;} ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="guests"><?= $lang->reservation->nbInvites ?></label><strong> *</strong>
                                <select name="guests" id="guests" class="form-control">
                                    <option value="" <?php if(!isset($_POST['guests'])) echo 'selected="selected"' ?>></option>
                                    <option value="1" <?php if(isset($_POST['guests']) && $_POST['guests'] == 1) echo 'selected="selected"' ?>>1 <?= $lang->reservation->personne ?></option>
                                    <option value="2" <?php if(isset($_POST['guests']) && $_POST['guests'] == 2) echo 'selected="selected"' ?>>2 <?= $lang->reservation->personnes ?></option>
                                    <option value="3" <?php if(isset($_POST['guests']) && $_POST['guests'] == 3) echo 'selected="selected"' ?>>3 <?= $lang->reservation->personnes ?></option>
                                    <option value="4" <?php if(isset($_POST['guests']) && $_POST['guests'] == 4) echo 'selected="selected"' ?>>4 <?= $lang->reservation->personnes ?></option>
                                    <option value="5" <?php if(isset($_POST['guests']) && $_POST['guests'] == 5) echo 'selected="selected"' ?>>5 <?= $lang->reservation->personnes ?></option>
                                    <option value="6" <?php if(isset($_POST['guests']) && $_POST['guests'] == 6) echo 'selected="selected"' ?>>6 <?= $lang->reservation->personnes ?></option>
                                    <option value="7" <?php if(isset($_POST['guests']) && $_POST['guests'] == 7) echo 'selected="selected"' ?>>7 <?= $lang->reservation->personnes ?></option>
                                    <option value="8" <?php if(isset($_POST['guests']) && $_POST['guests'] == 8) echo 'selected="selected"' ?>>8 <?= $lang->reservation->personnes ?></option>
                                </select>
                                <p class="comments"><?php if(isset($guestsError)){echo $guestsError;} ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="date"><?= $lang->reservation->date ?></label><strong> *</strong>
                                <input type="date" id="date" name="date" class="form-control" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>">
                                <p class="comments"><?php if(isset($dateError)){echo $dateError;} ?></p>
                            </div>

                            <div class="col-md-6">
                                <label for="time"><?= $lang->reservation->heure ?></label><strong> *</strong>
                                <select name="time" id="time" class="form-control">
                                    <option value="" <?php if(!isset($_POST['time'])) echo 'selected="selected"' ?>></option>
                                        <optgroup label="Déjeuner">
                                            <option value="12h00" <?php if(isset($_POST['time']) && $_POST['time'] == "12h00") echo 'selected="selected"' ?>><?= $lang->reservation->h_12h00 ?></option>
                                            <option value="12h15" <?php if(isset($_POST['time']) && $_POST['time'] == "12h15") echo 'selected="selected"' ?>><?= $lang->reservation->h_12h15 ?></option>
                                            <option value="12h30" <?php if(isset($_POST['time']) && $_POST['time'] == "12h30") echo 'selected="selected"' ?>><?= $lang->reservation->h_12h30 ?></option>
                                            <option value="12h45" <?php if(isset($_POST['time']) && $_POST['time'] == "12h45") echo 'selected="selected"' ?>><?= $lang->reservation->h_12h45 ?></option>
                                            <option value="13h00" <?php if(isset($_POST['time']) && $_POST['time'] == "13h00") echo 'selected="selected"' ?>><?= $lang->reservation->h_13h00 ?></option>
                                        </optgroup>
                                        <optgroup label="Dîner">
                                            <option value="19h30" <?php if(isset($_POST['time']) && $_POST['time'] == "19h30") echo 'selected="selected"' ?>><?= $lang->reservation->h_19h30 ?></option>
                                            <option value="19h45" <?php if(isset($_POST['time']) && $_POST['time'] == "19h45") echo 'selected="selected"' ?>><?= $lang->reservation->h_19h45 ?></option>
                                            <option value="20h00" <?php if(isset($_POST['time']) && $_POST['time'] == "20h00") echo 'selected="selected"' ?>><?= $lang->reservation->h_20h00 ?></option>
                                            <option value="20h15" <?php if(isset($_POST['time']) && $_POST['time'] == "20h15") echo 'selected="selected"' ?>><?= $lang->reservation->h_20h15 ?></option>
                                            <option value="20h30" <?php if(isset($_POST['time']) && $_POST['time'] == "20h30") echo 'selected="selected"' ?>><?= $lang->reservation->h_20h30 ?></option>
                                        </optgroup>
                                </select>
                                <p class="comments"><?php if(isset($timeError)){echo $timeError;} ?></p>
                            </div>

                            <div class="col-md-12">
                                <label for="message"><?= $lang->reservation->message ?></label>
                                <textarea id="message" name="message" class="form-control" placeholder="<?= $lang->reservation->votreMessage ?>" rows="4"><?php if(isset($_POST['message'])){echo $_POST['message'];} ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <p><strong><?= $lang->reservation->info ?></strong></p> 
                                <p><strong><?= $lang->reservation->contactReservation ?></strong></p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="button1" value="<?= $lang->reservation->btnReserver ?>" name="btnReservation">
                            </div>
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-10 col-lg-offset-1 -->
            </div><!-- /.row -->
        </div><!-- /.form_frame -->
    </div><!-- /.container -->
    
    <!-- Footer -->

    <?php include_once 'includes/footer.php'; ?>

</body>
</html>