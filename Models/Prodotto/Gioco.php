<?php 

// require_once __DIR__.("ProdottoBase.php");
class Gioco extends ProdottoBase{
    
    public $materiale;

    function __construct(
        string $_nome,
        string $_descrizione,
        float $_prezzo,
        string $_immagine,
        int $_quantita,
        Categoria $_categoria,
        string $_materiale,
        )
    {
        parent::__construct(
            $_nome,
            $_descrizione,
            $_prezzo,
            $_immagine,
            $_quantita,
            $_categoria
        );
        $this->materiale = $_materiale;
    }

}
?>
 