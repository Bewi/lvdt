<?php session_start() ?>
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
        <script>
            var isLoggedIn = <?php echo(isset($_SESSION['authenticated']) ? 'true' : 'false')  ?>;
        </script>
    </head>

    <body>
        <div id="app"></div>
        <script type="text/javascript" src="./applied/app.js"></script>
    </body>
</html>