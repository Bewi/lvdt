<div id="hero">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                <a href="/"><img src="./images/logo.svg" /></a>
            </div>
            <div id="account" class="col-xs-offset-2 col-sm-offset-5 col-md-offset-7 col-xs-3 col-sm-2 col-md-1 col-lg-1"> 
                <?php if ($isLoggedIn) { ?>
                    mon compte
                <?php } else { ?>
                    connexion
                <?php } ?>
            </div>
        </div>
    </div>
</div>