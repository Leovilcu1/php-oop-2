<?php 
require_once __DIR__."/Categoria.php";
class ProdottoBase{
    public $nome;
    public $descrizione;
    public $prezzo;
    public $immagine;
    public $quantita;
    public $categoria;

    function __construct(string $_nome,string $_descrizione,float $_prezzo,string $_immagine, int $_quantita, Categoria $_categoria)
    {
        $this ->nome = $_nome;
        $this ->descrizione = $_descrizione;
        $this ->prezzo = $_prezzo;
        $this ->immagine = $_immagine;
        $this ->quantita = $_quantita;
        $this ->categoria = $_categoria;
    }
}
?> 