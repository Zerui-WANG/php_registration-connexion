<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container-register">
    <div class="wrapper-register">
        <h2>Inscription</h2>
        <p>C'est gratuit (et ça le restera toujours)</p>

        <form action="<?php echo URLROOT; ?>/users/registration.php" method="POST">
            
                <input type="text" placeholder="Votre login" name="login">
                <span class="invalidFeedback">
                    <?php echo $data['loginError']; ?>
                </span>

                <input type="text" placeholder="Votre mot de passe" name="password">
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>

                <button id="submit" type="submit" value="Connexion">Connexion</button>
                
        </form>
    </div>
</div>