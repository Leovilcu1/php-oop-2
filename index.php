<?php
  require_once __DIR__."/Models/ProdottoBase.php";
  require_once __DIR__."/Models/Categoria.php";
  require_once __DIR__."/Models/Prodotto/Cibo.php";
  require_once __DIR__."/Models/Prodotto/Cuccia.php";
  require_once __DIR__."/Models/Prodotto/Gioco.php";

  $categoriaGatti = new Categoria("Gatti","https://images.unsplash.com/photo-1533738363-b7f9aef128ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80");
  $categoriaCani = new Categoria("Cani","https://images.unsplash.com/photo-1591769225440-811ad7d6eab3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");


  $prodotti=[];
  $prodotti[] = new ProdottoBase(
    "GOURMET Gold",
    "Alimento umido completo Gourmet Gold in tante deliziose ricette, con componenti di alta qualità per deliziare il palato raffinato del vostro gatto. Ora in conveniente multipack misto da 48 x 85 g",
    "24.99",
    "https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/pacco/misto/x/g/5/800/50340_pla_purina_gourmet_feine_pastete_huhn_85g_5.jpg",
    78,
    $categoriaGatti
  );
  $prodotti[] = new ProdottoBase(
    "Wolf Of WILDERNESS",
    "Alimento umido completo ricco di proteine di qualità Premium senza cereali per cani adulti, ispirato all'alimentazione originaria del lupo, con tanta carne (monoproteico), frutti di bosco, radici ed erbe selvatiche",
    "14.99",
    "https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/adult/x/g/7/800/wow_classic_stronglands_400g_1000px_7.jpg",
    78,
    $categoriaCani
  );
  $prodotti[] = new Cibo(
    "Yarrah bio",
    "2 kg o 2,4 kg di crocchette di qualità biologica controllata Yarrah Bio per gatti, con materie prime naturali e prive di additivi artificiali",
    22.09,
    "https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/yarrah/bio/crocchette/per/gatti/0/800/159396_pla_bio_yarrah_cat_food_huhn_10kg_hs_01_0.jpg",
    52,
    $categoriaGatti,
    "22/03/2026",
    "11/03/2021"
  );

  $prodotti[] = new Cuccia(
    "Cuccia per cani Jackson",
    "Cuccia in legno di abete per cani, resistente alle intemperie, con tetto spiovente apribile, vano contenitore per riporre alimenti e accessori e area pappa rialzata con 2 ciotole, facile da montare.",
    146.99,
    "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/800/167896_jackson_outside_res90_fg_4159_6.jpg",
    6,
    $categoriaCani,
    2,
  );

  $prodotti[] = new Gioco(
    "Bastone da masticare Chewies",
    "Bastone da masticare Chewies in legno di caffè con fibre fini ad effetto filo interdentale, soddisfa il bisogno di masticare e pulisce i denti, duro, naturale,",
    14.99,
    "https://shop-cdn-m.mediazs.com/bilder/bastone/da/masticare/chewies/in/legno/di/caff/4/800/73572_pla_chewies_kaffeeholzkaustab_m2_4.jpg",
    3,
    $categoriaCani,
    "Legno di caffè"
  )




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Zoo Shop</title>
</head>
<body> 
  <header>

  </header>
  <main>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1>Prodotti  Zoo X animali</h1>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-6 g-4 d-flex justify-content-between">
      <?php
      foreach($prodotti  as $index => $prodotto){
        ?>
        <div class="col">
        <div class="card h-100">
          <img src="<?php echo $prodotto->immagine?>" class="card-img-top" alt="<?php echo $prodotto->nome?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prodotto->nome?></h5>
            <div class="d-flex align-items-center">
              <img src="<?php echo $prodotto->categoria->icona?>" class="w-25" alt="">
            <h4 class="card-text mx-3"><?php echo $prodotto->categoria->nome?></h4>
            </div>
            <p class="card-text overflow-scroll h-25 ">Descrizzione : <?php echo $prodotto->descrizione?></p>
            <p class="card-text text-danger">€ <?php echo $prodotto->prezzo?></p>

            <?php
            if(is_a($prodotto, "Cibo")){
              ?>
            <p class="card-text ">Scadenza : <?php echo $prodotto->scadenza?></p>
              <?php
            }?>

            <?php
            if(is_a($prodotto, "Cuccia")){
            ?>
              <p class="card-text" >Posti : <?php echo $prodotto->posti?></p>
            <?php
            }?>

            <?php
            if(is_a($prodotto ,"Gioco")){
            ?>
              <p class="card-text">materiale : <?php echo $prodotto->materiale?></p>
            <?php
            }?>
            <button>Vedi Detagli</button>
          </div>
        </div>
      </div>
          
      <?php }
      ?>
  </div>
  </main>
  <footer>

  </footer>
</body>
</html>