<?php
require_once __DIR__."/Models/Categoria.php";
require_once __DIR__."/Models/ProdottoBase.php";

$categoriaCani = new Categoria("cani","img1");
$categoriaGatti = new Categoria("gatti","img2");

var_dump($categoriaCani);
var_dump($categoriaGatti);
  $prodotti=[];
  $prodotti[] = new Prodotto("Prodotto1",9.99,"immagine",20,$categoriaCani,"descrizione lunga");

$prodotti[] = new Prodotto("Prodotto2",19.99,"immagine",33,$categoriaGatti,"descrizione lunga");
?> 

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>

    <main>

    </main>
        <div class="container">
            <?php
            foreach ($prodotti as $index => $prodotto){ 
            ?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="..." class="card-img-top" alt="<?php echo $prodotto->immagine;?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $prodotto->nome;?> </h5>
                          <p class="card-text"><?php echo $prodotto->quantita;?>
                          <p class="card-text"><?php echo $prodotto->descrizione;?>
                          <p class="card-text"><?php echo $prodotto->categoria->nome;?>
                          <p class="card-text"><?php echo $prodotto->categoria->icona;?>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted"><?php echo $prodotto->prezzo;?></small>
                        </div> 
                      </div>
                    </div>
                </div>
            <?php
            }
            ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
            
            
            
            
        </div>
    <footer>

    </footer>
</body>
</html>