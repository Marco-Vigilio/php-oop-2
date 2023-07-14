<?php 

class Prodotti {
    public $immagine;
    public $titolo;
    public $prezzo;
    public $categoria;
    public $tipologia;

    public function __construct(string $_immagine, string $_titolo, string $_prezzo, Categorie $_categoria, Tipologie $_tipologia ){
        $this->immagine = $_immagine;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->tipologia = $_tipologia;
    }
}

class Categorie{
    public $nomeCategoria;
    public $icon;

    public function __construct(string $_nomeCategoria, string $_icon){
        $this->nomeCategoria = $_nomeCategoria;
        $this->icon = $_icon;
    }
}

class Tipologie {
    public $nomeTipologia;

    public function __construct(string $_nomeTipologia){
        $this->tipologia = $_nomeTipologia;
    }
}

$categorie = [
    new Categorie("Cani", "fa-solid fa-dog"),
    new Categorie("Gatti", "fa-solid fa-cat"),
];

$tipologie = [
    new Tipologie("Accessorio"),
    new Tipologie("Cibo"),
    new Tipologie("Giocattolo"),
    new Tipologie("Cuccia"),
];


$prodotti = [
    new Prodotti("qualcosa", "Osso di gomma", "2€", $categorie[0], $tipologie[2]),
    new Prodotti("qualcosa", "Ciondolo per gatti", "4€", $categorie[1], $tipologie[0]),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop Animals</title>
</head>
<body>
    <div class="contain">
        <h1>
            Negozio di Animali
        </h1>
        <div class="items">
        <?php foreach ($prodotti as $prodotto) { ?>
            <div class="card col-3 p-0 m-3" >
                <div class="card-header">
                    <?php echo $prodotto->categoria->nomeCategoria; ?>
                </div>
                
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>

<!--
                <img src="<?php echo $post->image ?>"  class="card-img-top rounded-0" alt="<?php echo $post->title; ?>">
                <div class="card-body p-3">
                    <h5 class="card-title">
                    <?php echo $post->title; ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo $post->author->username; ?>
                        <br>
                        <?php echo $post->dateTime->format('Y-m-d H:i:s'); ?>
                    </h6>
                    <p class="card-text">
                        <?php echo $post->getSynopsis(88); ?>
                    </p>
                    <a href="#" class="btn btn-primary">
                        Read more...
                    </a>
                </div>
                -->