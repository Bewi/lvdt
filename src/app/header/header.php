<header class="<?= $isLightHeader ? 'light' : '' ?>">
    <?php include("./app/header/hero.php") ?>
    <?php 
        if(!$isAccountPage) {
            include("./app/header/search.php") ;
        }
    ?>
    <?php 
        if(!$isAccountPage) {
            include("./app/header/login.php"); 
        }
    ?>
    <div id="mask"></div>
</header>