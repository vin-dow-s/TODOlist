<?php
require_once './Modele/Restaurant.class.php';
require_once './Vue/Vue.class.php';
require_once './Controleur/Controleur.class.php';

class CtrlAccueil extends Controleur {

    public function index() {
        $rest = new Restaurant();
        $restaurants = $rest->getRestaurants();
        return(['restaurants' => $restaurants]);
    }

}
