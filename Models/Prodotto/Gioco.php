<?php 

// require_once __DIR__.("ProdottoBase.php");
require_once __DIR__."/../../traits/haColore.php";
class Gioco extends ProdottoBase{
    
    use Colore;
    public $materiale;

    function __construct(
        string $_nome, 
        string $_descrizione,
        float $_prezzo,
        string $_immagine,
        int $_quantita,
        Categoria $_categoria,
        string $_materiale,
        string $_dimensione,
        string $_colore,
        )
  
    {
        
        parent::__construct(
            $_nome,
            $_descrizione,
            $_prezzo,
            $_immagine,
            $_quantita,
            $_categoria,
            $_dimensione,
            $_colore,
        );
        $this->materiale = $_materiale;
        $this->colore=$_colore;
    }

}
?>
 