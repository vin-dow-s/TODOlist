<?php
//Exercice 1
class Ville {

    private $nom;
    private $departement;

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDepartement($departement){
        $this->departement = $departement;
    }

    public function __toString(): string
    {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement;
    }
}

$bordeaux = new Ville;
$bordeaux->setNom('Bordeaux');
$bordeaux->setDepartement('33 (Gironde)');
echo $bordeaux;


//Exercice 2
echo '<br>';
class Ville2 {

    private $nom;
    private $departement;

    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString(): string
    {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . '<br>';
    }
}

$agen = new Ville2('Agen', '47 (Lot-et-Garonne)');
echo $agen;


//Exercice 3
class VilleAvecRegion extends Ville {

    private $region;

    public function __construct($nom, $departement, $region)
    {
        parent::setNom($nom);
        parent::setDepartement($departement);
        $this->region = $region;
    }

    public function __toString(): string
    {
        return parent::__toString() . ' de la région ' . $this->region;
    }
}

$toulouse = new VilleAvecRegion('Toulouse', '31 (Haute-Garonne)', 'Occitanie');
echo $toulouse;


//Exercice 4
class VilleCtr2 {

    private $nom;
    private $departement;

    protected static $nomLePlusLong;

    public function __construct($nom, $departement)
    {
        if (strlen($nom) > strlen((string) static::$nomLePlusLong)) {
            static::$nomLePlusLong = $nom;
        }
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString(): string
    {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . '<br>';
    }

    public static function getNomLePlusLong(){
        return static::$nomLePlusLong;
    }
}

$lrsy = new VilleCtr2('La Roche sur Yon', 'Vendée');
$q = new VilleCtr2('Quimper', 'Finister');
$cm = new VilleCtr2('Charleville-Mézières', 'Ardennes');
$r = new VilleCtr2('La Rochelle', 'Charentes Maritime');
echo '<br> La ville ayant le nom le plus long est : '. VilleCtr2::getNomLePlusLong();


//Exercice 5
class FormSimple {
    protected $formulaire;
    public function __construct($nom, $action, $methode = 'POST') {
        $this->formulaire = '<form action="' . $action . '" method="' . $methode . '"><fieldset><legend>' . $nom . '</legend>';
    }

    public function setText($label, $nom) {
        $this->formulaire .= '<label for="' . $nom . '">' . $label . ' : </label>'; $this->formulaire .= '<input id="' . $nom . '" name="' . $nom . '">';
    }

    public function setSubmit($nom) { $this->formulaire .= '<input type="submit" name="' . $nom . '" value="' . $nom . '">';
    }

    public function getForm() {
        return $this->formulaire . '</fieldset></form>';
    }
}
$form1 = new FormSimple('Formulaire de test', '#');
$form1 -> setText('nom de famille', 'nom');
$form1 -> setText('prénom', 'prenom');
$form1 -> setSubmit('Envoyer le formulaire');
echo $form1->getForm();


//Exercice 6
class FormSimple2 extends FormSimple {
    public function setCheckBox($label, $nom) {
        $this->formulaire .= '<input id="' . $nom .'" name="' . $nom .'" type="checkbox">';
        $this->formulaire .= '<label for="' . $nom .'">' . $label .'</label><br>';
    }

    public function setRadioButton($label, $nom, $groupe) {
        $this->formulaire .= '<input id="' . $nom .'" name="' . $groupe .'" value="' . $nom . '" type="radio">';
        $this->formulaire .= '<label for="' . $nom .'">' . $label .'</label><br>';
    }
}
$formulaire1 = new FormSimple2('Formulaire de test', '#');
$formulaire1->setCheckBox("J'accepte de recevoir de la publicité", 'pub');
$formulaire1->setRadioButton('Féminin', 'F', 'sexe');
$formulaire1->setRadioButton('Masculin', 'M', 'sexe');
for ($i = 1; $i <= 5; $i++) {
    $formulaire1->setRadioButton($i . ' étoile' . ($i > 1 ? 's' : ''), $i, 'note');
}
$formulaire1->setSubmit('Envoyer le formulaire');
echo $formulaire1->getForm();


//Exercice 7
abstract class Personne {

    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

class Client extends Personne {

    protected $adresse;

    public function setCoord($adresse){
        $this->adresse = $adresse;
    }

    public function __toString(): string {
        return '<address>' . $this->nom . ' ' . $this->prenom . '<br>' . $this->adresse . '</address>';
    }
}

class Electeur extends Personne {

    protected $bureauDeVote;
    protected $vote;

    public function aVote() {
        $this->vote = true;
    }

    public function __construct($nom, $prenom, $bureauDeVote)
    {
        parent::__construct($nom, $prenom);
        $this -> bureauDeVote = $bureauDeVote;
        $this -> vote = false;
    }

    public function __toString() {
        return $this->nom . ' ' . $this->prenom . ' (Bureau n°' . $this->bureauDeVote . ') ' . ($this->vote ? 'a déjà' : 'n\'a pas') . ' voté<br>';
    }
}
$c1 = new Client('Malalaniche', 'Mélanie');
$c1->setCoord('34 rue de la clinique vétérinaire');
echo $c1;
$e1 = new Electeur('Bosapin', 'Edmond', '103');
echo $e1; echo 'appel à la méthode de vote<br>';
$e1->aVote();
echo $e1;