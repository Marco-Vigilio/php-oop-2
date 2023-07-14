<?php 

class Prodotti {
    public $immagine;
    public $titolo;
    public $prezzo;
    
    public $tipologia;
    public $categoria;

    public function __construct(string $_immagine, string $_titolo, string $_prezzo,  Categorie $_categoria, Tipologie $_tipologia,  ){
        $this->immagine = $_immagine;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        
        $this->tipologia = $_tipologia;
        $this->categoria = $_categoria;
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

class Tipologie{
    public $nomeTipologia;

    public function __construct(string $_nomeTipologia){
        $this->nomeTipologia = $_nomeTipologia;
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
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Osso di gomma", "2€", $categorie[0], $tipologie[2]),
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Ciondolo per gatti",  "4€", $categorie[1], $tipologie[0]),
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Tonno per gatti", "4€", $categorie[1], $tipologie[1]),
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Osso di gomma", "2€", $categorie[0], $tipologie[2]),
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Ciondolo per gatti",  "4€", $categorie[1], $tipologie[0]),
    new Prodotti("https://source.unsplash.com/random/250x400?sig=".rand(0,100), "Tonno per gatti", "4€", $categorie[1], $tipologie[1]),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Shop Animals</title>
</head>
<body>
    <div class="contain">
        <h1>
            Negozio di Animali
        </h1>
        <div class="items">
        <?php foreach ($prodotti as $prodotto) { ?>
            <div class="card">
                <div class="card_header">
                    <h2><?php echo $prodotto->tipologia->nomeTipologia;?></h2>
                    <i class="<?php echo $prodotto->categoria->icon; ?>"></i>
                </div>

                    <img src="<?php echo $prodotto->immagine; ?>" alt="<?php echo $prodotto->titolo; ?>">

                <div class="info">
                    <h3><?php echo $prodotto->titolo; ?></h3>
                    <p>Prezzo: <?php echo $prodotto->prezzo; ?></p>
                </div>
                
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>