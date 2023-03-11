<?php 

require_once __DIR__."/ProdottoBase.php";

class Categoria{
    public $nome;
    public $icona;

    function __construct($_nome,$_icona)
    {
        $this -> nome = $_nome;
        $this -> icona = $_icona;
    }
}

?>

   
  