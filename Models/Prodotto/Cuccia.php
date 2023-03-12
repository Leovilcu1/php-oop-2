<?php 

// require_once __DIR__."ProdottoBase.php";
require_once __DIR__."/../../traits/haColore.php";


class Cuccia extends ProdottoBase{

    public $posti;
    use Colore;


    function __construct(
        string $_nome,
        string $_descrizione,
        float $_prezzo,
        string $_immagine,
        int $_quantita,
        Categoria $_categoria,
        int $_posti,
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
        );
        $this->posti = $_posti;
        $this ->colore = $_colore;
    }
}

?>