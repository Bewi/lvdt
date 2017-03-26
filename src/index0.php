<!--<html>
    <header></header>
    <body>
        <a href="/index-home.php">Home</a><br />
        <a href="/index-perso.php">Espace perso</a><br />
        <a href="/index-search.php">Resultat recherche</a><br />
        <a href="/index-product.php">Détail produit</a><br />
        <a href="/index-legal.php">Légal</a><br />
        <a href="/index-term-of-use.php">Conditions d'utilisation</a><br />
        <a href="/index-term-of-sales.php">Conditions de vente</a><br />
    </body>
</html>-->

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
        <link rel="icon" href="./favico.ico" />
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./css/app.css" />
    </head>

    <body id="app">
        <?php 
            $isLightHeader = false;
            $isAccountPage = false;
            $isLoggedIn = false;
        ?>
        


        <?php include('app/header/header.php') ?> 
        <corporate-header :show-search="true" :is-logged-in="false"></corporate-header>
        <?php // include('app/home/nav.php') ?>   
        <?php // include('app/account/perso.php') ?>
        <?php // include('app/searchResult/searchResult.php'); ?>
        <?php // include('./app/product/product.php') ?>
        <?php // include('./app/product/discover.php') ?>

        <?php // include('app/home/big-picture.php'); ?>

        <?php include('app/footer/footer.php'); ?>

        <script type="text/javascript" src="./scripts/vue.js"></script>
        <script type="text/javascript" src="./app/app.js"></script>
        <script type="text/javascript" src="./app/header/CorporateHeaderComponent.js"></script>
        <script type="text/javascript" src="./scripts/app.js"></script>
    </body>
</html>