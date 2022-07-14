<?php
/**
 * Classe Medico
 * @author Luís Miguel
 * @version 0.1
 * @copyright
 */
include_once "Pessoa.php";

class Medico extends Pessoa{

    private int $crm;

    /**
      * Parametro que da "get" no crm
      * @access public
      * @return int
      */
    public function getCrm()
    {
        return $this->crm;
    }
    

    /**
    * Parametro que "seta" no crea
    * @access public
    * @return int
    */
    public function setCrm($crm)
    {
        $this->crm = $crm;

        return $this;
    }
    
}
$medic = new Medico();

$medic ->setNome('Luis Miguel');
$medic -> setDataNasc('09/12/2004');
$medic ->setCpf(3837289472893);
$medic ->setRg(8923832949);
$medic ->setCrm(8932840238402);

echo "<h2><strong>Médico</strong></h2>";
echo "</br>";
echo "Nome: {$medic ->getNome()}";
echo "</br>";
echo "Data de Nascimento: {$medic ->getDataNasc()}";
echo "</br>";
echo "CPF: {$medic ->getCpf()}";
echo "</br>";
echo "RG: {$medic ->getRg()}";