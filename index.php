<?php 

class Prodotti extends Categorie{
    public $immagine;
    public $titolo;
    public $prezzo;
    public $categoria;

    public function __construct(string $_immagine, string $_titolo, string $_prezzo, Categorie $_categoria ){
        $this->immagine = $_immagine;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
}

class Categorie{
    public $nomeCategoria;

    public function __construct(string $_nomeCategoria){
        $this->nomeCategoria = $_nomeCategoria;
    }
}

class Tipologia {
    public $nomeTipologia;

    public function __construct(string $_nomeTipologia){
        $this->tipologia = $_nomeTipologia;
    }
}

$categoria = [
    $cani = new Categorie("cani"),
    $gatti = new Categorie("gatti"),
];



$prod = new Prodotti("qualcosa", "Osso di gomma", "2€", $categoria[0]);
var_dump($prod);

?>