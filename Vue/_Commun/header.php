<header class="col-sm-8 col-md-6 col-lg-4 center-block">
    <a href=""><img class="img-responsive" src="Contenu/icone.png"></a>
    <?php if (isset($user)) : ?>
        <div class="row slide_inside" style="text-align:center;">
            <?php include_once('userInfo.php') ?>
        </div>
    <?php endif; ?>
</header>