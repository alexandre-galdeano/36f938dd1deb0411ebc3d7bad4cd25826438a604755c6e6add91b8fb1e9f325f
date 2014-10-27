<?php $this->titre = "Connexion"; ?>
<?php include_once("Vue/_Commun/header.php"); ?>
    <div class="slide_inside col-sm-8 col-md-6 col-lg-4 center-block">
        <h2>Identification client</h2>

        <form class="form-signin form-horizontal" role="form" action="connexion/connecter" method="post">
            <div class="form-group">
                <br/>
                <?php if (isset($msgErreur)) : ?>
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                            <strong>Erreur !</strong> <?= $this->nettoyer($msgErreur) ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-sm-6 col-sm-offset-3 col-md-6">
                    <input name="login" type="text" class="form-control"
                           placeholder="Entrez votre login" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-6">
                    <input name="pwd" type="password" class="form-control"
                           placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3 col-md-6">
                    <button type="submit" class="btn btn-default btn-primary"><span
                            class="glyphicon glyphicon-log-in"></span> Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>
<?php include_once("Vue/_Commun/footer.php"); ?>