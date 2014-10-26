<?php if (isset($user)) : ?>
    <div class="slide_inside col-sm-8 col-md-6 col-lg-4 center-block" style="text-align:center;">

        <?= $user['civilite'] ?>
        <?= $user['nom'] ?>
        <?= $user['prenom'] ?>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                Options
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="#">Modifier mes informations</a>
                </li>
                <li role="presentation" class="divider"></li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="connexion/deconnecter">Se déconnecter</a>
                </li>
            </ul>
        </div>
    </div>
<?php endif; ?>