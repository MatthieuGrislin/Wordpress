<?php
function content_page(){
    $idRegex = '%^[A-Z]{2}\-[0-9]{8}\-[0-9]{1}$%';
    if(isset($_POST['send'])){
        if(preg_match($idRegex, $_POST['trackingId'])){
            $trackingId = htmlspecialchars($_POST['trackingId']);
            add_option('TrackingId', $trackingId);
        }else{
            $message = 'Format non valide, Utilisez un format exemple : "UA-00000000-0" ';
        }
    }
    ?>
    <h1>Entrez un ID de suivi</h1>
    <form method="POST">
        <label for="trackingId">ID de suivi : </label>
        <input type="text" name="trackingId" id="trackingId" value="<?= isset($_POST['trackingId']) ? $_POST['trackingId'] : '' ?>" />
        <p><?= isset($message) ? $message : '' ?></p>
        <input type="submit" value="Envoyer" name="send" />
    </form>
    <?php
}