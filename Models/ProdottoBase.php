<?php 
require_once __DIR__."/Categoria.php";
class Prodotto{
    public $nome;
    public $descrizione;
    public $prezzo;
    public $immagine;
    public $quantita;
    public $categoria;
    
    function __construct($_nome,$_prezzo,$_immagine,$_quantita, Categoria $_categoria,$_descrizione)
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