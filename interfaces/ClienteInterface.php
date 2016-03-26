<?php

/**
 * Created by PhpStorm.
 * User: borges
 * Date: 23/03/16
 * Time: 12:08
 */
interface ClienteInterface
{
    public function VerificaLimite($valor);
    public function RegistraCompra($valor);
    public function RegistraPagamento($valor);
    public function getGrauImportancia();
    public function setGrauImportancia($grau_importancia);
    public function getEnderecoCobranca();
    public function setEnderecoCobranca($endereco);
}
?>