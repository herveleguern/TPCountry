<?php
class Ville{
    private $id;
    private $nom;
    private $lePays;//objet Pays

    public function __construct($id,$nom)
    {
        $this->id=$id;
        $this->nom=$nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getLePays(){
        return $this->lePays;
    }

    public function setLePays($lePays){
        $this->lePays=$lePays;

    }
    public function getNomPays(){
        //A COMPLETER
    }


}
?>