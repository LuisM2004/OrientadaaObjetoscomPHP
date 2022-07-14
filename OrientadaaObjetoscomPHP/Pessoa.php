<?php
/**
 * Classe Pessoa
 * @author Luís Miguel
 * @version 0.1
 * @copyright
 */
class Pessoa{
    private String $Nome;
    private String $DataNasc;
    private int $cpf;
    private int $rg;

    /**
     * Pega o valor da Pessoa
     * @access public
     * @return String
     */ 
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Coloca o valor da Pessoa
     * @access public
     * @param String
     */ 
    public function setNome($Nome)
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Pega o valor da Data de Nascimento
     * @access public
     * @return String
     */ 
    public function getDataNasc()
    {
        return $this->DataNasc;
    }

    /**
     * Coloca o valor da Data de Nascimento
     *@access public
     *@param String
     */ 
    public function setDataNasc($DataNasc)
    {
        $this->DataNasc = $DataNasc;

        return $this;
    }

    /**
     * Pega o valor do cpf
     * @access public
     * @return int
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Coloca o valor do cpf
     * @access public
     * @param int
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Pega o valor do rg
     * @access public
     * @return int
     */ 
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Coloca o valor do rg
     * @access public
     * @param int
     */ 
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }
}

