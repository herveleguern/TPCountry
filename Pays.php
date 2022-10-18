<?php
class Pays
{
    private $id;
    private $nom;
    private $lesVilles=[]; //tableau d'objets Ville
    private $laCapitale; //objet Ville
    private $lesLangues=[]; //tableau d'objets Langue + booleen estOfficielle

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom=$nom;
    }

    public function ajouterVille(Ville $uneVille)
    {
        $uneVille->setLePays($this);
        $this->lesVilles[] = $uneVille;
    }

    public function setLaCapitale($uneVille){
        $this->laCapitale=$uneVille;
    }
    public function ajouterLangue(Langue $uneLangue,$estOfficielle)
    {
        $this->lesLangues[] = array($uneLangue,$estOfficielle);
    }
    
    public function getNomCapitale(){
        //A COMPLETER
    }

    public function getNom(){
        return $this->nom;
    }

    public function getLangueNonOfficielle(){
     //A COMPLETER
    }
}
