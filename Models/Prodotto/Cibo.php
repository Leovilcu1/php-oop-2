<?php 

// require_once __DIR__."ProdottoBase.php";  

class Cibo extends ProdottoBase{
    public $scadenza;
    public $dataProduzione;

    function __construct(
        string $_nome,
        string $_descrizione,
        float $_prezzo,
        string $_immagine,
        int $_quantita,
        Categoria $_categoria,
        string $_scadenza,
        string $_dataProduzione,
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
        $this->scadenza = $_scadenza;
        $this->dataProduzione = $_dataProduzione;
    }

}
?>