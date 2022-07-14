<?php
/**
 * Classe Engenheiro
 * @author Luís Miguel
 * @version 0.1
 * @copyright
 */
include_once "Pessoa.php";
class Engenheiro extends Pessoa{

    private int $crea;
    
    /**
    * Parametro que da "get" no crea
    * @access public
    * @return int
    */
    public function getCrea()
    {
        return $this->crea;
    }

    /**
      * Parametro que "seta" o crea
      * @access public
      * @param int
      */
    public function setCrea($crea)
    {
        $this->crea = $crea;

        return $this;
    }
    

}
$eng = new Engenheiro();

$eng ->setNome('Matheus');
$eng -> setDataNasc('18/06/2004');
$eng ->setCpf(3837289472893);
$eng ->setRg(8923832949);
$eng ->setCrea(8932840238402);

echo "<h2><strong>Engenheiro</strong></h2>";
echo "</br>";
echo "Nome: {$eng ->getNome()}";
echo "</br>";
echo "Data de Nascimento: {$eng ->getDataNasc()}";
echo "</br>";
echo "CPF: {$eng ->getCpf()}";
echo "</br>";
echo "RG: {$eng ->getRg()}";