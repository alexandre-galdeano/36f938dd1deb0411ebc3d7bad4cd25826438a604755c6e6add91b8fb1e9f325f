<?php
require 'Framework/Routeur.php';
$routeur = new Routeur();
$routeur->modeHttps();
$routeur->routerRequete();