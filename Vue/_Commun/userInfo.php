<div class="row"><?= $user['civilite'] ?> <?= $user['nom'] ?> <?= $user['prenom'] ?></div>
<div class="btn-group btn-group-justified">
    <div class="btn-group">

        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Options
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">Modifier mes informations</a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">Modifier mon mot de passe</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="connexion/deconnecter">Se déconnecter</a>
            </li>
        </ul>
    </div>
</div>