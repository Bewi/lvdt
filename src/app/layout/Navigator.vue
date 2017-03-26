<template>
<div id="nav" class="container">
    <div id="toggler" class="row">
        <div class="col-xs-10">
            <h3>Découvrir les thés <img src="./images/arrow.svg" alt=""/></h3>
        </div>
    </div>
    <div id="nav-items" class="row">
        <div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
            <h3>Les thés d'origines</h3>
            <ul class="half">
                <li>breakfast</li>
                <li>ceylan</li>
                <li>chine</li>
                <li>inde</li>
                <li>japon</li>
            </ul>
            <ul class="half">
                <li>thés fumés</li>
                <li>thés bio</li>
                <li>autres pays</li>
            </ul>
        </div>
        <div class="col-xs-10 col-sm-5 col-md-4 col-md-4 col-lg-4">
            <h3>Les thés parfumés</h3>
            <ul class="half">
                <li>mélanges parfumés</li>
                <li>thés blanc</li>
                <li>thés lights</li>
                <li>thés noirs</li>
                <li>thés verts</li>
            </ul>
            <ul class="half">
                <li>thés oolongs</li>
                <li>thés russes</li>
                <li>earl grey</li>
                <li>rooïbos</li>
                <li>infusions</li>
            </ul>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-2 col-md-2 col-lg-2">
            <h3>Nos autres articles</h3>
            <ul>
                <li>cafés</li>
                <li>alimentaire</li>
                <li>cristal</li>
                <li>coffrets</li>
                <li>accessoires</li>
            </ul>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        name: 'nav'
    }
</script>