<?php 
require_once __DIR__."/Categoria.php";
require_once __DIR__ ."/../traits/haDimensioni.php";
class ProdottoBase{
    use Dimensione;
    public $nome;
    public $descrizione;
    public $prezzo;
    public $immagine;
    public $quantita;
    public $categoria;
    
    function __construct(string $_nome,string $_descrizione,float $_prezzo,string $_immagine, int $_quantita, Categoria $_categoria,string $_dimensione)
    {
        if(strlen($_nome) > 3){
            $this ->nome = $_nome;
        }
        else{
            throw new Exception("Stringa 'NOME' non valida");
        }
        $this ->nome = $_nome;
        $this ->descrizione = $_descrizione;
        $this ->prezzo = $_prezzo;
        $this ->immagine = $_immagine;
        $this ->categoria = $_categoria;
        $this ->quantita = $_quantita;
        $this ->dimensione = $_dimensione;

    }

}
?> 