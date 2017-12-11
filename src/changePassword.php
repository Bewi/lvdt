<?php session_start(); 
    include('server/sql.php');

    $status = 'initial';
    $errorMessage = '';
    $QueryString;
    $id = '';
    $password = '';
    $email = '';

    if (!empty($_POST)) {
        $id = array_key_exists('id', $_POST) ? $_POST['id'] : '';
        $email = array_key_exists('email', $_POST) ? $_POST['email'] : '';
        $password = array_key_exists('password', $_POST) ? $_POST['password'] : '';
        $passwordConfirmation = array_key_exists('passwordConfirmation', $_POST) ? $_POST['passwordConfirmation'] : '';

        if ($id == '') {
            $status = 'errorIdMissing';
            $errorMessage = 'Votre lien a expiré, veuillez refaire une demande';
        } else if ($password == '') {
            $status = 'errorPasswordMissing';
            $errorMessage = 'Veuillez entrer un mot de passe.';
        } else if ($passwordConfirmation == '') {
            $status = 'errorPasswordConfirmationMissing';
            $errorMessage = 'Veuillez entrer la confirmation de votre mot de passe.';
        } else if ($password == $passwordConfirmation) {
            if (changePassword($id, $email, $password)->success) {
                $status = 'success';
            } else {
                $status = 'errorWhenChangingPassword';
                $errorMessage ='Une erreur est survenue lors de la modification du mot de passe.';
            }
        } else {
            $errorMessage = 'La confirmation ne correspond pas au mot de passe.';
            $status = 'errorPasswordNotMatch';
        }
    } else if (!empty($_SERVER && array_key_exists('QUERY_STRING', $_SERVER))) {
        parse_str($_SERVER['QUERY_STRING'], $QueryString);
        $id = $QueryString['requestId'];
        $email = $QueryString['email'];

        if (!requestChangePassword($id, $email)->success) {
            $status = 'errorRequestChangePasswordFailed';
            $errorMessage = 'Votre lien a expiré, veuillez refaire une demande';
        }
    }

    if (!$id || $id == '') {
        $status = 'errorIdMissing';
    }

    function requestChangePassword($id, $email) {
        $bdd=sql_connect();
        $result = sql_requestPasswordChange($bdd, $id, $email);

        unset($bdd);

        return $result;
    }

    function changePassword($id, $email, $newPassword) {
        $bdd=sql_connect();
        
        $result = sql_changePassword($bdd, $id, $email, $newPassword);
    
        unset($bdd);
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Le Vent Des Thés</title>
        <meta name="description" content="Magasin de the - cafe sur Dunkerque(59). Vente en ligne de plus de 300 sortes de th�s et infusions et de divers produits et accessoires dans le domaine du the et du cafe.">
        <meta name="robots" content="all">
        <meta name="keywords" content="Le vent des thés, vent des thés, vdt, thé, café, salon de thé,vente , vent">
        <meta http-equiv="Content-Language" content="fr">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./favico.png" />
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/app.css" />
    </head>

    <body class="no-footer">
        <div id="init-password" class="black-card">
            <div class="container">
                <header>
                    <img id="logo" src="./images/logo-light.svg" alt="Le vent des thés"></img>
                    <?php if($status != 'success') { ?>
                        <h1>Finaliser la création de votre compte en choisisant votre mot de passe :</h1>
                    <?php } else { ?>
                        <h1>Mot de passe modifié avec succès, vous allez être redirigé.</h1>
                        <script type="text/javascript">
                            setTimeout(() => {
                                window.location.href='/';
                            }, 5000);
                        </script>
                    <?php } ?>
                </header>
                <?php if($status != 'success') { ?>
                    <div class="row">
                        <form method="post" action="changePassword.php">
                            <?php 
                                if ($errorMessage != '') {
                                    echo "<p class='invalid'>" . $errorMessage . "</p>";
                                }
                            ?>
                            <div class="input-group">
                                <label>Rentrer votre mot de passe</label>
                                <input id="password" name="password" type="password" class="<?php echo ($status == 'errorPasswordMissing' ? 'invalid' : '' ) ?>" />
                            </div>
                            <div class="input-group">
                                <label>Verifier votre mot de passe</label>
                                <input id="passwordConfirmation" name="passwordConfirmation" type="password" class="<?php echo ($status == 'errorPasswordConfirmationMissing' ? 'invalid' : '' ) ?>"/>
                            </div> 
                            <div class="input-group">
                                <input type="submit" value="valider"/>
                            </div>
                            <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                            <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>