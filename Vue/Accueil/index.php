<?php $this->titre = "Accueil"; ?>
<?php include_once("Vue/_Commun/header.php"); ?>
<div class="slide_inside col-sm-8 col-md-6 col-lg-4 center-block">
    <div class="row">

        <p>
            Ici vous pouvez gérer toutes les demandes d'intérimaires.</p>
    </div>
    <div class="row">
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="#">
                    <button type="button" class="btn btn-default disabled">Nouvelle</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="#">
                    <button type="button" class="btn btn-default disabled">En cours</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="#">
                    <button type="button" class="btn btn-default disabled">Historique</button>
                </a>
            </div>
        </div>
    </div>
    <?php if (isset($user['isAdmin'])) : ?>
        <hr>
        <div class="row">
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    <a href="#">
                        <button type="button" class="btn btn-default disabled">Administration</button>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php include_once("Vue/_Commun/footer.php"); ?>

