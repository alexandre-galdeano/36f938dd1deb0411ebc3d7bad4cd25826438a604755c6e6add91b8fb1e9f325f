<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ControleurPersonnalise.php';

class ControleurBonCommande extends ControleurPersonnalise
{

    public function __construct()
    {
    }

    public function index()
    {
        $this->genererVue();
    }

    public function motif()
    {
        $this->genererVue();
    }

}