<?php 

// require_once __DIR__."ProdottoBase.php";

class Cuccia extends ProdottoBase{
    public $posti;

    function __construct(
        string $_nome,
        string $_descrizione,
        float $_prezzo,
        string $_immagine,
        int $_quantita,
        Categoria $_categoria,
        int $posti
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
        $this->posti = $posti;
    }
}

?>