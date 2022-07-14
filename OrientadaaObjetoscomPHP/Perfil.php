<?php

include_once "Pessoa.php";
/**
 * @author Luís Miguel
 * @version 0.1
 * @copyright
 */
$pessoa = new Pessoa();
$pessoa ->setNome('Leo KF');
$pessoa -> setDataNasc('15/12/2004');
$pessoa ->setCpf(3837289472893);
$pessoa ->setRg(8923832949);

echo "<h2><strong>Perfil</strong></h2>";
echo "</br>";
echo "Nome: {$pessoa ->getNome()}";
echo "</br>";
echo "Data de Nascimento: {$pessoa ->getDataNasc()}";
echo "</br>";
echo "CPF: {$pessoa ->getCpf()}";
echo "</br>";
echo "RG: {$pessoa ->getRg()}";